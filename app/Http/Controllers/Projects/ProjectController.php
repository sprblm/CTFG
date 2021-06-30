<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class ProjectController extends Controller {
    // Get all projects view
    public function index() {
        $projects = DB::table('candidates')->orderBy('order_', 'ASC')->get();
        
        return view('projects.all', [
            'title' => 'Projects',
        ]);
    }

    // Embed add project Airtable form view
    public function add() {
        return view('projects.add', [
            'title' => 'Create Projects',
        ]);
    }
}
