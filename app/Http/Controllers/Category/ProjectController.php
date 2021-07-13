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

        if ($request->has('tags')) {
            $tags = $request->query('tags');
            $tagIds = array();

            for ($i=0; $i < sizeof($tags); $i++) { 
                $tagId = Tag::where('name', $tags[$i])->first();
                array_push($tagIds, $tagId->id);
            }

            $listings->whereHas('tags', function($q) use ($tagIds) {
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

            $listings->whereHas('categories', function($q) use ($catIds) {
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

            $listings->when(count($countries), function ($query) use ($countries) {
                $query->whereHas('location', function($q) use ($countries) {
                    $q->where( function($q) use ($countries) {
                        foreach ($countries as $country) {
                            $q->orWhere('name', 'like', '%' . $country . '%');
                        }
                    });
                });
            });
        }

        if ($request->has('status')) {
            $listings->where('status', 'Active');
        }
        
        $projects = $listings->paginate(10);

        $category->update([
            'hits' => $category->hits + 1,
        ]);

        return view ('projects.projects-by-category', [
            'title' => 'Projects - '.$category->name,
            'categoryName' => $category->name,
            'parentCategoryName' => @$category->parentCategory->name,
            'categoryDesc' => @$category->description,
            'projects' => $projects,
            'activeCat' => $category->name,
            'activePCat' => @$category->parentCategory->name,
            'filterCategories' => @$categories,
            'filterTags' => @$tags,
            'filterCountries' => @$countries,
            'filterStatus' => @$request->query('status'),
        ]);
    }
}
