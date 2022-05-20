<?php

namespace App\Console\Commands;
use Airtable;
use App\Jobs\HealthChecker;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class HealthCheckerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'health-checker';

    /**
     * Retrieves the Airtable records and dispatch the job of checking the url status to a queue.
     *
     * @var string
     */
    protected $description = 'Retrieves the Airtable records and dispatch the job of checking the url status to a queue';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $allListings = Airtable::table('listings')->all();
        Log::channel('healthcheck')->info("HEALTH CHECKER START");
        foreach ($allListings as $record){
            HealthChecker::dispatch($record);
        }
        return 0;
    }
}
