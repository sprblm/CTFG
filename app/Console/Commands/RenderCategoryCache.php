<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Jobs\RenderCategoryView;

class RenderCategoryCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'render-cache:category';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Renders the category tree view in cache file';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(){
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle() {
        try {
            //RenderCategoryView::dispatch();
            app(\App\Jobs\RenderCategoryView::class)->handle();
            
        } catch (\Throwable $th) {
            \Log::error('Error from rendering category cache cronjob: ' . $th->getMessage());
        }
    }
}
