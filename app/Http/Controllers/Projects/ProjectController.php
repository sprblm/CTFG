<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    // Search autocomplete
    public function searchAutoComplete(Request $request) {
        $q = $request->query->get('query');
        $data = Listing::select("name")
                ->where("name", "LIKE", "%{$q}%")
                ->get();
   
        return response()->json($data);
    }
}