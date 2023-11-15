<?php

namespace App\Jobs;

use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Airtable;

class HealthChecker implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $record;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($record)
    {
        $this->record = $record;
    }

    /**
     * Execute the job.
     * Check the url status: do nothing if success,
     * try to fix if broken, log if not able to fix
     *
     * @return void
     * @throws Exception
     */
    public function handle()
    {
        $noFixStatus = [403, 52];
        $url = $this->record['fields']['Website URL'] ?? false;
        if (strpos($url, 'archive.org') !== false) {
            $this->maybeFixWaybackLink($url, $noFixStatus);
            return;
        }
        $statusCheck = $url ? $this->statusCheck($url) : false;
        if ($this->isSuccessfulStatus($statusCheck)) {
            return;
        }

        if ($this->isBrokenStatus($statusCheck)) {
            if (in_array($statusCheck, $noFixStatus, true)) {
                $this->logToCheckManually($this->record, $statusCheck);
                return;
            }
            $waybackLink = $this->findWaybackLink($url);
            if ($waybackLink) {
                Log::channel('healthcheck')->info(
                    "FIXED RECORD ID: {$this->record['id']} WEBSITE URL: {$waybackLink}"
                );
                $this->updateAirtableRecord($this->record, $waybackLink);
                return;
            }
        }
        $this->logToCheckManually($this->record, $statusCheck);
    }

    /**
     * Gets the status of a given url request
     *
     * @param string $url
     *
     * @return int
     */
    public function statusCheck($url)
    {
        try {
            $userAgent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36';
            $referer = 'https://directory.civictech.guide';

            $response = Http::withHeaders([
                'User-Agent' => $userAgent,
                'Referer' => $referer
            ])
                ->withOptions([
                    'verify' => true, // Enable SSL verification
                ])
                ->timeout(10)
                ->retry(2, 10)
                ->get($url);
            return $response->status();
        } catch (\Exception $exception) {
            if (strpos($exception->getMessage(), 'error 52') !== false) {
                return 52;
            }
            return $exception->getCode();
        }
    }

    /**
     * @param $statusCheck
     *
     * @return bool
     */
    public function isSuccessfulStatus($statusCheck)
    {
        return $statusCheck >= 200 && $statusCheck < 300;
    }

    /**
     * @param $statusCheck
     *
     * @return bool
     */
    public function isBrokenStatus($statusCheck)
    {
        return $statusCheck >= 400 || $statusCheck < 100;
    }
    /**
     * Find the latest archived for a given url
     *
     * @param string $urlToFind
     *
     * @return null
     */
    public function findWaybackLink(string $urlToFind)
    {
        $waybackLink = 'http://archive.org/wayback/available?url=' . urlencode($urlToFind);
        try {
            $response = Http::get($waybackLink);
            if ($response->successful()) {
                $data = json_decode($response->body());
                if (!empty($data->archived_snapshots->closest) && $data->archived_snapshots->closest->status == '200') {
                    return $data->archived_snapshots->closest->url;
                }
            }
        } catch (\Exception $exception) {
            return null;
        }

        return null;
    }

    /**
     * Update the listing record in Airtable
     *
     * @param $record
     * @param $newUrl
     */
    public function updateAirtableRecord( $record, $newUrl, $status, $log)
    {
        Airtable::table('listings')->patch($record['id'],["Website URL"=>$newUrl, "Status"=>'Inactive']);
    }

    /**
     * Logs the data of the failed record in a log file
     * Insert the record to Airtable
     *
     * @param $record
     * @param int $status
     */
    public function logToCheckManually($record, $status)
    {
        $url = $this->record['fields']['Website URL'] ?? 'NO URL PROVIDED';
        $log = "MANUAL CHECK ID: {$record['id']} WEBSITE URL: {$url} RECEIVED STATUS: {$status}";

        Airtable::table('404s')->create([
            'Url' => $url,
            'Status' => $status,
            'Manual Check' => "YES",
            'Listing' => [$this->record['id']],
            'Logs Info' => $log
        ]);

        Log::channel('healthcheck')->info("MANUAL CHECK ID: {$record['id']} WEBSITE URL: {$url} RECEIVED STATUS: {$status}");
    }

    private function getOriginalUrl($url)
    {
        return substr( $url, strrpos($url,"http"), strlen($url)-strrpos($url,"http") );
    }

    /**
     * @param       $url
     * @param array $noFixStatus
     *
     * @return void
     */
    protected function maybeFixWaybackLink($url, array $noFixStatus): void
    {
        $url = $this->getOriginalUrl($url);
        $statusCheck = $url ? $this->statusCheck($url) : false;
        if ($this->isSuccessfulStatus($statusCheck)
            || in_array(
                $statusCheck,
                $noFixStatus,
                true
            )
        ) {
            Log::channel('healthcheck')->info(
                "FALSE POSITIVE FIXED: {$this->record['id']} WEBSITE URL: {$url} RECEIVED STATUS: {$statusCheck}"
            );
            $this->updateAirtableRecord($this->record, $url);
        }
    }
}
