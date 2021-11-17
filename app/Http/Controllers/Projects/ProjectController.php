<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

use App\Jobs\LogSearch;

use App\Models\Listing;
use App\Models\SearchLog;
use App\Models\Category;
use App\Models\Tag;

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
        //print_r($request->all());

        $q = $request->query('q');
        $escapedQuery = addslashes($q);
        
        $results = Listing::where("name", "LIKE", "%{$escapedQuery}%")
                ->orWhere("introduction", "LIKE", "%{$escapedQuery}%")
                ->orWhere("description", "LIKE", "%{$escapedQuery}%")
                ->orderByRaw("CASE
                    WHEN name = '{$escapedQuery}' THEN 1
                    WHEN name LIKE '{$escapedQuery}%' THEN 2
                    WHEN name LIKE '%{$escapedQuery}%' THEN 3
                    ELSE 4
                    END");
                //->paginate(10);

        if ($request->has('tags')) {
            $tags = $request->query('tags');
            $tagIds = array();

            for ($i=0; $i < sizeof($tags); $i++) { 
                $tagId = Tag::where('name', $tags[$i])->first();
                array_push($tagIds, $tagId->id);
            }

            $results->whereHas('tags', function($q) use ($tagIds) {
                $q->whereIn('tag_id', $tagIds);
            });
        }

        if ($request->has('categories')) {
            $categories = $request->query('categories');
            $catIds = array();

            for ($i=0; $i < sizeof($categories); $i++) { 
                $catId = Category::where('name', $categories[$i])->first();
                array_push($catIds, $catId->id);
            }

            $results->whereHas('categories', function($q) use ($catIds) {
                $q->whereIn('category_id', $catIds);
            });
        }

        if ($request->has('countries')) {
            $countries = $request->query('countries');

            // Add variants of US
            if (in_array('United States of America', $countries)) {
                array_push($countries, 'USA');
                array_push($countries, 'United States');
            }

            // Add variants of UK
            if (in_array('United Kingdom', $countries)) {
                array_push($countries, 'UK');
            }

            $results->when(count($countries),function ($query)use ($countries) {
                $query->whereHas('location', function($q) use ($countries) {
                    $q->where( function($q) use ($countries) {
                        foreach ($countries as $country) {
                            $q->orWhere('name', 'like', '%' . $country . '%');
                        }
                    });
                });
            });

        }

        if ($request->has('opensource')) {
            $opensource = $request->query('opensource');

            $listings->where('open_source', $opensource);
        }

        $activeProjects = 1;
        if ($request->has('status')) {
            $results->where('status', 'Active');
            if ($request->query('status') == 'Active') {
                $activeProjects = 1;
            } else {
                $activeProjects = 0;
            }
        } else {
            $activeProjects = 0;
        }
        
        $projects = $results->paginate(10);

        // Queue job for logging
        $resultsTotal = $projects->total();
        if (!empty($q)) {
            $this->logSearch($q, $resultsTotal);
        }
        

        return view ('projects.search-results', [
            'title' => 'Civic Tech Field Guide - Search Results',
            'projects' => $projects,
            'query' => @$q,
            'filterCategories' => @$categories,
            'filterTags' => @$tags,
            'filterCountries' => @$countries,
            'filterStatus' => @$activeProjects,
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
        // Create new entry
        $log = new SearchLog;
        $log->item = $query;
        $log->search_count =  $total;
        $log->total_results_count = $total;
        $log->last_search_results_count = $total;
        $log->save();
    }
}
