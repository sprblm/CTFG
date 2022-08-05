<?php

namespace App\Jobs;

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
    /**
     * The number of times the job may be attempted.
     *
     * @var int
     */
    public $tries = 3;
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
     */
    public function handle()
    {
        $url = $this->record['fields']['Website URL'] ?? false;
        $statusCheck = $url ? $this->statusCheck($url) : false;
        if ($this->isSuccessfulStatus($statusCheck)) {
            return;
        }

        if ($this->isBrokenStatus($statusCheck)) {
            if ($statusCheck === 403) {
                $this->logToCheckManually($this->record, $statusCheck);
                return;
            }
            $newUrl = $this->findWaybackLink($url);
            if ($newUrl) {
                Log::channel('healthcheck')->info(
                    "FIXED RECORD ID: {$this->record['id']} WEBSITE URL: {$newUrl}"
                );
                $this->updateAirtableRecord($this->record, $newUrl);
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
            $response = Http::withHeaders([
                                              'User-Agent' => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)'
                                          ])->withOptions([
                                                              'verify' => false,
                                                          ])->get($url);
            return $response->status();
        }catch (\Exception $exception){
            Log::channel('healthcheck')->info("MANUAL CHECK URL: {$url} EXCEPTION: {$exception->getMessage()}");
            return 400;
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
        return $statusCheck >= 400;
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
}
