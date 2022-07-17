<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Tag;

class ProjectController extends Controller {
    // Get projects by category
    public function getProjectsByCategory(Request $request) {
        $slug = $request->segment(2);

        $category = Category::where('slug', $slug)->first();

        if (!$category) {
            return abort(404);
        }

        $parent = $category->parent;
        $grandParent = '';
        $greatGrandParent = '';
        $greatGreatGrandParent = '';
        $ancestor = '';
        
        if (!empty($parent)) {
            if (!empty(Category::where('name', $parent->name)->first()->parent->name)) {
                $grandParent = Category::where('name', $parent->name)->first()->parent;
            }
        }

        if (!empty($grandParent)) {
            if (!empty(Category::where('name', $grandParent->name)->first()->parent)) {
                $greatGrandParent = Category::where('name', $grandParent->name)->first()->parent;
            }
        }

        if (!empty($greatGrandParent)) {
            if (!empty(Category::where('name', $greatGrandParent->name)->first()->parent)) {
                $greatGreatGrandParent = Category::where('name', $greatGrandParent->name)->first()->parent;
            }
        }

        if (!empty($greatGreatGrandParent)) {
            if (!empty(Category::where('name', $greatGreatGrandParent->name)->first()->parent)) {
                $ancestor = Category::where('name', $greatGreatGrandParent->name)->first()->parent;
            }
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

        $activeProjects = 1;
        if ($request->has('status')) {
            $listings->where('status', 'Active');
        } else {
            $activeProjects = 0;
        }

        $projects = $listings->paginate(10);

        $category->update([
            'hits' => $category->hits + 1,
        ]);

        return view ('projects.projects-by-category', [
            'title' => 'Projects - '.$category->name,
            'categoryName' => $category->name,
            'category' => $category,
            'parentCategoryName' => @$category->parentCategory->name,
            'categoryDesc' => @$category->description,
            'projects' => $projects,
            'activeAncestor' => @$category->parent->parent->parent,
            'activeGrandParent' => @$category->parent->parent,
            'activeParent' => @$category->parent,
            'activeCat' => $category->name,
            'filterCategories' => @$categories,
            'filterTags' => @$tags,
            'filterCountries' => @$countries,
            'filterStatus' => $activeProjects,
        ]);
    }

    // Get projects by tag
    public function getProjectsByTag(Request $request) {
        $name = $request->segment(2);

        $tag = Tag::where('name', $name)->first();

        if (!$tag) {
            return abort(404);
        }

        $listings = $tag->listings();
        $projects = $listings->paginate(10);

        $parentTag = $tag->parent;

        return view ('projects.projects-by-tag', [
            'projects' => $projects,
            'title' => 'Projects - '.$tag->name,
            'tagName' => $tag->name,
            'tag' => $tag,
            'activeTag' => $tag,
            'activeParentTag' => $parentTag,
        ]);
    }

    // Get tags table
    public function tagsTable() {
        $tags = Tag::whereNull('parent_id')
            ->whereIn('name', ['Issue', 'Format', 'Community', 'Current event', 'Sustainable Development Goals', 'Political unit', 'Platform', 'Feature', 'coop', 'Other'])
            ->orderByRaw("FIELD(name , 'Issue', 'Format', 'Community', 'Current event', 'Sustainable Development Goals', 'Political unit', 'Platform', 'Feature', 'coop', 'Other') ASC")
            ->with('childItems')
            ->get();

        return view ('tags.tags-table', [
            'tags' => $tags,
            'title' => 'Listing Tags',
            'menu' => 'tags',
        ]);
    }
}
