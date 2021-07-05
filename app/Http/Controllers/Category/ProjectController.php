<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;

class ProjectController extends Controller {
    // Get projects by category
    public function getProjectsByCategory(Request $request) {
        $categoryName = $request->segment(3);

        $category = Category::where('name', $categoryName)->first();

        return view ('projects.all', [
            'title' => 'Projects - '.$categoryName,
            'projects' => $category->listings()->simplePaginate(10),
        ]);
    }
}
