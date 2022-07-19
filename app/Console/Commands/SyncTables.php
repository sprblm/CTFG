<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;


class SyncTables extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:tables';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Truncates data from tables, recreates them from Airtable';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle() {
        //try {
            app(\App\Http\Controllers\Airtable\Sync\CategoryController::class)->syncCategories();

            app(\App\Http\Controllers\Airtable\Sync\FundingController::class)->syncFunding();

            app(\App\Http\Controllers\Airtable\Sync\ImpactController::class)->syncImpact();

            app(\App\Http\Controllers\Airtable\Sync\KnowledgeController::class)->syncKnowledge();

            app(\App\Http\Controllers\Airtable\Sync\BoundaryController::class)->syncBoundary();

            app(\App\Http\Controllers\Airtable\Sync\LocationController::class)->syncLocation();

            app(\App\Http\Controllers\Airtable\Sync\MediaController::class)->syncMedia();

            app(\App\Http\Controllers\Airtable\Sync\PeopleController::class)->syncPeople();

            app(\App\Http\Controllers\Airtable\Sync\TagController::class)->syncTag();

            app(\App\Http\Controllers\Airtable\Sync\ListingController::class)->syncListing();

        /*} catch (\Throwable $th) {
            \Log::error('Error from Airtable auto sync cronjob: ' . $th->getMessage());
        }*/
    }
}
