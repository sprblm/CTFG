<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

use App\Models\Listing;

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
                    ELSE 2
                    END")
                ->paginate(10);

        /*$results = Listing::selectRaw(
            "SELECT *
               FROM  listings
               WHERE name LIKE '%".$q."%' 
               OR introduction LIKE '%".$q."%' 
               OR description LIKE '%".$q."%' 
               ORDER BY
                CASE
                WHEN name LIKE '".$q."' THEN 1
                WHEN name LIKE '%".$q."%' THEN 2
                ELSE 3
            END"); */
        
        //print_r($results);
        return view ('projects.search-results', [
            'title' => 'CivicTech.Guide - Search Results',
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
}
