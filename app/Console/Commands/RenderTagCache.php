<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Jobs\RenderTagView;

class RenderTagCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'render-cache:tag';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Renders the tag tree view in cache file';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle() {
        try {
            //RenderTagView::dispatch();
            app(\App\Jobs\RenderTagView::class)->handle();
        } catch (\Throwable $th) {
            \Log::error('Error from rendering tag cache cronjob: ' . $th->getMessage());
        }
    }
}
