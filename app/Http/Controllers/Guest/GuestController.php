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
        //$projects = Listing::simplePaginate(10);
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
            $listings->whereHas('location', function($q) {
                //$q->whereLike('name', $catIds);
                $q->whereIn('name', 'LIKE', "%{$tweet}%");
            });
        }

        if ($request->has('status')) {
            $listings->where('status', 'Active');
        }

        //echo $listings->count();
        
        $projects = $listings->simplePaginate(10);

        return view ('welcome', [
            'title' => 'CivicTech.Guide',
            'projects' => $projects,
            'filterCategories' => @$categories,
            'filterTags' => @$tags,
            'filterCountries' => @$countries,
        ]);

    }
}
