<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

use App\Jobs\LogSearch;

use App\Models\Listing;
use App\Models\SearchLog;

class ProjectController extends Controller {
    // Embed add project Airtable form view
    public function add() {
        return view('projects.add', [
            'title' => 'Create Projects',
        ]);
    }

    // Get a single project - by name
    public function singleProject(Request $request) {
        $slug = $request->segment(2);

        $project = Listing::where('slug', $slug)->first();

        if (!$project) {
            return abort(404);
        }

        // Update category hits
        foreach ($project->categories as $cat) {
            $cat->update([
                'hits' => $cat->hits + 1,
            ]);
        }

        return view('projects.single', [
            'title' => 'Project - '.$project->name,
            'project' => $project,
        ]);
    }

    // Search
    public function search(Request $request) {
        $q = $request->query('q');
        
        $results = Listing::where("name", "LIKE", "%{$q}%")
                ->orWhere("introduction", "LIKE", "%{$q}%")
                ->orWhere("description", "LIKE", "%{$q}%")
                ->orderByRaw("CASE
                    WHEN name = '{$q}' THEN 1
                    WHEN name LIKE '{$q}%' THEN 2
                    WHEN name LIKE '%{$q}%' THEN 3
                    ELSE 4
                    END")
                ->paginate(10);

        // Queue job for logging
        $resultsTotal = $results->total();

        $this->logSearch($q, $resultsTotal);

        /* try {
            LogSearch::dispatch($q, $resultsTotal);
        } catch (\Throwable $th) {
            \Log::error('Error from search log: ' . $th->getMessage());
        } */
        

        return view ('projects.search-results', [
            'title' => 'Civic Tech Field Guide - Search Results',
            'projects' => $results,
            'query' => @$q,
        ]);

    }

    // Search autocomplete
    public function searchAutoComplete(Request $request) {
        $q = $request->query->get('query');
        $data = Listing::select("name")
                ->where("name", "LIKE", "%{$q}%")
                ->orWhere("introduction", "LIKE", "%{$q}%")
                ->get();
   
        return response()->json($data);
    }

    // Log Search
    public function logSearch($query, $total) {
        $previousSearches = SearchLog::where('item', $query)->first();

        if ($previousSearches) {
            // update
            $previousSearches->update([
                'search_count' => ($previousSearches->search_count) + 1,
                'total_results_count' => ($previousSearches->total_results_count) + $total,
                'last_search_results_count' => $total,
            ]);
        } else {
            // Create new entry
            $log = new SearchLog;
            $log->item = $query;
            $log->search_count =  $total;
            $log->total_results_count = $total;
            $log->last_search_results_count = $total;
            $log->save();
        }
    }
}
