<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class UpdateConfs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'confs:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update confs';

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
        $res = Http::get('https://smddev-api.techward.net/ds/update-token');
        //\Log::info("Confs response code: ".$res->status()) ;
        return 0;
    }
}
