<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Airtable;

class RevertArchiveLink implements ShouldQueue
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
     * Execute the job: update table with old link
     *
     * @return void
     */
    public function handle()
    {
        $oldLink = $this->findOldLink($this->record["fields"]);
        if (!$oldLink){
            return;
        }
        $isArchiveLink = $this->isArchiveLink($this->record["fields"]);
        if(!$isArchiveLink){
            return;
        }
        $this->updateAirtableRecord($this->record, $oldLink);
    }


    /**
     * Update the listing record in Airtable
     *
     * @param $record
     * @param $newUrl
     */
    public function updateAirtableRecord( $record, $newUrl)
    {
        Airtable::table('listings')->patch($record['id'],["Website URL"=>$newUrl]);
    }

    public function findOldLink($record)
    {
        $link = $record["Website URL"] ?? false;
        if(!$link){
            return false;
        }

        return substr( $link, strrpos($link,"http"), strlen($link)-strrpos($link,"http") );
    }

    public function isArchiveLink($record): bool
    {
        return strrpos($record["Website URL"],"web.archive.org") !== false;
    }
}
