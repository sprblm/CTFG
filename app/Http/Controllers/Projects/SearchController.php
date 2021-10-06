<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

use App\Models\SearchLog;

class SearchController extends Controller {
    // Get search log
    public function getLog () {
        //$logs = SearchLog::get();

        $logs = DB::select(DB::raw("SELECT item, count(item) as times_searched, date(created_at) as created_at from search_log group BY item, date(created_at) order BY count(item) DESC, date(created_at) DESC"));
        //print_r(collect($logs));

        return view ('projects.search-log', [
            'title' => 'Civic Tech Field Guide - Search Log',
            'logs' => collect($logs),
        ]);
    }
}
