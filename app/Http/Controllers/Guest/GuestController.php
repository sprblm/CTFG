<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Listing;
use App\Models\Category;
use App\Models\Tag;

class GuestController extends Controller {
    // Welcome page
    public function index(Request $request) {
        $listings = Listing::where('id', '>', 0);

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

            $listings->when(count($countries),function ($query)use ($countries) {
                $query->whereHas('location', function($q) use ($countries) {
                    $q->where( function($q) use ($countries) {
                        foreach ($countries as $country) {
                            $q->orWhere('name', 'like', '%' . $country . '%');
                        }
                    });
                });
            });
        }

        $activeProjects = 1;
        if ($request->has('status')) {
            $listings->where('status', 'Active');
            if ($request->query('status') == 'Active') {
                $activeProjects = 1;
            } else {
                $activeProjects = 0;
            }
        } else {
            $listings->where('status', 'Active');
        }
        
        $projects = $listings->paginate(10);

        return view ('welcome', [
            'title' => 'Civic Tech Field Guide',
            'projects' => $projects,
            'filterCategories' => @$categories,
            'filterTags' => @$tags,
            'filterCountries' => @$countries,
            'filterStatus' => @$activeProjects,
        ]);

    }

    // Get world map
    public function worldMap() {
        $projects = Listing::whereNotNull('latitude')->whereNotNull('longitude')->get();

        //echo $projects->count();

        return view ('map.all-projects', [
            'title' => 'Civic Tech Field Guide - World Map',
            'projects' => $projects,
            'template' => 'map',
        ]);
    }
}
