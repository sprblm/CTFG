<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class ProjectController extends Controller {
    // Get all projects view
    public function index() {
        $projects = DB::table('listings')->simplePaginate(10);

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
}
