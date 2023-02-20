<?php

namespace App\Console\Commands;
use Airtable;
use App\Jobs\RevertArchiveLink;
use Illuminate\Console\Command;

class RevertArchiveLinkCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'revert-archive-link';

    /**
     * Retrieves the Airtable records and dispatch the job of reverting the archive link to a queue.
     *
     * @var string
     */
    protected $description = 'Retrieves the Airtable records and dispatch the job of reverting the archive link to a queue';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $allListings = Airtable::table('listings')->all();
        foreach ($allListings as $record){
            RevertArchiveLink::dispatch($record);
        }
        return 0;
    }
}
