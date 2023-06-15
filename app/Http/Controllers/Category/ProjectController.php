<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Listing;
use App\Models\ListingCategory;
use App\Models\ListingTag;
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

        $listingIds = ListingCategory::where('category_id', $category->id)->pluck('listing_id')->toArray();

        \Log::info("Listings count: ".sizeof($listingIds));

        //\DB::enableQueryLog();

        $projects = Listing::query()
            ->whereIn('id', $listingIds)
            ->when(request('tags'), function($builder) {
                $tags = request('tags');

                $builder->whereHas('tags', function($builder) use ($tags) {
                    $builder->whereIn('name', $tags);
                });
            })
            ->when(request('categories'), function($builder) {
                $categories = request('categories');

                $builder->whereHas('categories', function($builder) use ($categories) {
                    $builder->whereIn('name', $categories);
                });
            })
            ->when(request('countries'), function($builder) {
                $countries = request('countries');

                $builder->when(count($countries),function ($builder) use ($countries) {
                    $builder->whereHas('location', function($builder) use ($countries) {
                        $builder->where( function($builder) use ($countries) {
                            foreach ($countries as $country) {
                                $builder->orWhere('country', 'LIKE', '%' . $country . '%');
                                //$builder->orWhere('name', 'LIKE', '%' . $country . '%');
                            }
                        });
                    });
                }); 
            })
            ->when(request('opensource'), function($builder) {
                $builder->where('open_source', request('opensource'));
            })
            ->when(request('types'), function($builder) {
                $types = request('types');
                if (in_array("Other", $types)) {
                    $key = array_search("Other", $types);
                    $types[$key] = NULL;

                    $builder->whereIn('type', $types)->orWhereNull('type');
                } else {
                    $builder->whereIn('type', $types);   
                }
            })
            ->when(request('organizationtypes'), function($builder) {
                $organizationtypes = request('organizationtypes');
                if (in_array("Other", $organizationtypes)) {
                    $key = array_search("Other", $organizationtypes);
                    $organizationtypes[$key] = NULL;

                    $builder->whereIn('organization_type', $organizationtypes)->orWhereNull('organization_type');
                } else {
                    $builder->whereIn('organization_type', $organizationtypes);   
                }
            })
            ->when(request('status'), function($builder){
                $builder->where('status', request('status'))->orWhere('status', 'N/A');
            }, function($builder){
                //Different from guest controller since when checkbox not checked, we should load everything.
                //$builder->whereIn('status', ['Active', 'Inactive', 'N/A', 'Document',])->orWhereNull('status');
            })
            ->when(request('q'), function($builder) {
                $builder->searchQuery(request('q'));
            })
            ->orderBy('created', 'DESC')
            ->paginate(50);

        \Log::info("Total projects: ".$projects->total());
        \Log::info("Projects count: ".count($projects));

        //dd(\DB::getQueryLog());

        $category->update([
            'hits' => $category->hits + 1,
        ]);

        if (count(request()->all()) == 0) {
            $filterStatus = "Active";
        } else if(request('status')){
            $filterStatus = request('status');
        } else {
            $filterStatus = '';
        }

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
            'query' => request('q'),
            'filterCategories' => request('categories'),
            'filterTags' => request('tags'),
            'filterCountries' => request('countries'),
            'filterStatus' => $filterStatus,
            'filterOrgTypes' => request('organizationtypes'),
            'filterOpenSource' => request('opensource'),
            'filterTypes' => request('types'),
        ]);
    }

    // Get projects by tag
    public function getProjectsByTag(Request $request) {
        $name = $request->segment(2);

        $tag = Tag::where('name', $name)->first();

        if (!$tag) {
            return abort(404);
        }

        //$projects = $tag->listings()
        $listingIds = ListingTag::where('tag_id', $tag->id)->pluck('listing_id')->toArray();

        //\DB::enableQueryLog();

        $projects = Listing::query()
            ->whereIn('id', $listingIds)
            ->when(request('tags'), function($builder) {
                $tags = request('tags');

                $builder->whereHas('tags', function($builder) use ($tags) {
                    $builder->whereIn('name', $tags);
                });
            })
            ->when(request('categories'), function($builder) {
                $categories = request('categories');

                $builder->whereHas('categories', function($builder) use ($categories) {
                    $builder->whereIn('name', $categories);
                });
            })
            ->when(request('countries'), function($builder) {
                $countries = request('countries');

                $builder->when(count($countries),function ($builder)use ($countries) {
                    $builder->whereHas('location', function($builder) use ($countries) {
                        $builder->where( function($builder) use ($countries) {
                            foreach ($countries as $country) {
                                $builder->orWhere('country', 'LIKE', '%' . $country . '%');
                                //$builder->orWhere('name', 'LIKE', '%' . $country . '%');
                            }
                        });
                    });
                }); 
            })
            ->when(request('opensource'), function($builder) {
                $builder->where('open_source', request('opensource'));
            })
            ->when(request('types'), function($builder) {
                $types = request('types');
                if (in_array("Other", $types)) {
                    $key = array_search("Other", $types);
                    $types[$key] = NULL;

                    $builder->whereIn('type', $types)->orWhereNull('type');
                } else {
                    $builder->whereIn('type', $types);   
                }
            })
            ->when(request('organizationtypes'), function($builder) {
                $organizationtypes = request('organizationtypes');
                if (in_array("Other", $organizationtypes)) {
                    $key = array_search("Other", $organizationtypes);
                    $organizationtypes[$key] = NULL;

                    $builder->whereIn('organization_type', $organizationtypes)->orWhereNull('organization_type');
                } else {
                    $builder->whereIn('organization_type', $organizationtypes);   
                }
            })
            ->when(request('status'), function($builder){
                $builder->where('status', request('status'))->orWhere('status', 'N/A');
            }, function($builder){
                //Different from guest controller since when checkbox not checked, we should load everything.
                $builder->whereIn('status', ['Active', 'Inactive', 'N/A', 'Document',])->orWhereNull('status');
            })
            ->when(request('q'), function($builder) {
                $builder->searchQuery(request('q'));
            })
            ->orderBy('created', 'DESC')
            ->paginate(50);

        $parentTag = $tag->parent;

        if (count(request()->all()) == 0) {
            $filterStatus = "Active";
        } else if(request('status')){
            $filterStatus = request('status');
        } else {
            $filterStatus = '';
        }

        return view ('projects.projects-by-tag', [
            'projects' => $projects,
            'title' => 'Projects - '.$tag->name,
            'tagName' => $tag->name,
            'tag' => $tag,
            'activeTag' => $tag,
            'activeParentTag' => $parentTag,
            'query' => request('q'),
            'filterCategories' => request('categories'),
            'filterTags' => request('tags'),
            'filterCountries' => request('countries'),
            'filterStatus' => $filterStatus,
            'filterOrgTypes' => request('organizationtypes'),
            'filterOpenSource' => request('opensource'),
            'filterTypes' => request('types'),
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
