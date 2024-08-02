<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Listing;

use Elasticsearch;

class IndexListings extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'listings:index';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Indexes listings for elastic search';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle() {
        $listings = Listing::all();

        foreach ($listings as $listing) {
            try {
                Elasticsearch::index([
                    'id' => $listing->id,
                    'index' => 'posts',
                    'body' => [
                        'name' => $listing->name,
                        'introduction' => $listing->introduction
                    ]
                ]);
            } catch (Exception $e) {
                $this->info($e->getMessage());
            }
        }

        $this->info("Listings were successfully indexed");
        return Command::SUCCESS;
    }
}
