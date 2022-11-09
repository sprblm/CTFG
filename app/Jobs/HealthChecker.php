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
            $response = Http::withHeaders(['User-Agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)'])
                ->withOptions(['verify' => false,])
                ->timeout(10)
                ->retry(2, 10)
                ->get($url);
            return $response->status();
        }catch (\Exception $exception){
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
        try {
            $waybackLink = 'http://archive.org/wayback/available?url='. $urlToFind;
            $jsonResponse = Http::get($waybackLink);
            $responseObject = json_decode($jsonResponse);
            $hasClosestLink = !empty($responseObject->archived_snapshots);
            $newUrl = null;
            if($hasClosestLink){
                $newUrl = $responseObject->archived_snapshots->closest->url;
            }

            return $newUrl;
        }catch (\Exception $exception){
            return null;
        }
    }

    /**
     * Update the listing record in Airtable
     *
     * @param $record
     * @param $newUrl
     */
    public function updateAirtableRecord( $record, $newUrl)
    {
        Airtable::table('listings')->patch($record['id'],["Website URL"=>$newUrl, "Status"=>'Inactive']);
    }

    /**
     * Logs the data of the failed record in a log file
     *
     * @param $record
     * @param int $status
     */
    public function logToCheckManually($record, $status)
    {
        $url = $this->record['fields']['Website URL'] ?? 'NO URL PROVIDED';
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
