<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Models\SearchLog;

class LogSearch implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $query;
    public $resultsTotal;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($query, $resultsTotal) {
        $this->query = $query;
        $this->resultsTotal = $resultsTotal;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle() {
        $previousSearches = SearchLog::where('item', $this->query)->first();

        if ($previousSearches) {
            // update
            $previousSearches->update([
                'search_count' => ($previousSearches->search_count) + 1,
                'total_results_count' => ($previousSearches->total_results_count) + $this->resultsTotal,
                'last_search_results_count' => $this->resultsTotal,
            ]);
        } else {
            // Create new entry
            $log = new SearchLog;
            $log->item = $this->query;
            $log->search_count =  $this->resultsTotal;
            $log->total_results_count = $this->resultsTotal;
            $log->last_search_results_count = 0;
            $log->save();
        }
        
    }
}
