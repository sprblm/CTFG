<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SearchLog;

class SearchController extends Controller {
    // Log search parameters
    public function log (Request $request) {
        
    }

    // Get search log
    public function getLog () {
        $logs = SearchLog::paginate(10);

        return view ('projects.search-log', [
            'title' => 'Civic Tech Field Guide - Search Log',
            'logs' => $logs,
        ]);
    }
}
