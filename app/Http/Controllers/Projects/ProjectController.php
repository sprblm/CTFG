<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Listing;

class ProjectController extends Controller {
    // Get all projects view
    public function index() {
        $projects = Listing::simplePaginate(10);

        return view('projects.all', [
            'title' => 'Projects',
            'projects' => $projects,
        ]);
    }

    // Embed add project Airtable form view
    public function add() {
        return view('projects.add', [
            'title' => 'Create Projects',
        ]);
    }

    // Get a single project - by name
    public function singleProject(Request $request) {
        $projectName = $request->segment(3);

        $project = Listing::where('name', $projectName)->first();

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
            'title' => 'Project - '.$projectName,
            'project' => $project,
        ]);
    }
}
