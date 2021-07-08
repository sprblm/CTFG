<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;

class ProjectController extends Controller {
    // Get projects by category
    public function getProjectsByCategory(Request $request) {
        $slug = $request->segment(2);

        $category = Category::where('slug', $slug)->first();

        if (!$category) {
            return abort(404);
        }

        $listings = $category->listings();

        /*$tags = $request->query('tags');
        echo print_r($tags); */

        if ($request->has('categories')) {
            $categories = $request->query('categories');
            $catIds = array();

            for ($i=0; $i < sizeof($categories); $i++) { 
                array_push($catIds, $categories[$i]);
            }

            $listings->whereIn('category_id', $catIds);
        }

        if ($request->has('status')) {
            $listings->where('status', 'Active');
        }
        
        $projects = $listings->simplePaginate(10);

        //$projects = $category->listings()->simplePaginate(10);

        /*$category->update([
            'hits' => $category->hits + 1,
        ]); */

        return view ('projects.projects-by-category', [
            'title' => 'Projects - '.$category->name,
            'categoryName' => $category->name,
            'parentCategoryName' => @$category->parentCategory->name,
            'categoryDesc' => @$category->description,
            'projects' => $projects,
        ]);
    }
}
