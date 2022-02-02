<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Listing;
use App\Models\Category;
use App\Models\Tag;
use App\Models\SearchLog;

class GuestController extends Controller {
    // Welcome page
    public function index(Request $request) {
        $projects = Listing::query()
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

                // Add variants of US
                if (in_array('United States of America', $countries)) {
                    array_push($countries, 'USA');
                    array_push($countries, 'United States');
                }

                // Add variants of UK
                if (in_array('United Kingdom', $countries)) {
                    array_push($countries, 'UK');
                }

                $builder->when(count($countries),function ($builder)use ($countries) {
                    $builder->whereHas('location', function($builder) use ($countries) {
                        $builder->where( function($builder) use ($countries) {
                            foreach ($countries as $country) {
                                $builder->orWhere('name', 'like', '%' . $country . '%');
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
            /*->when(request('status') || (count(request()->all()) == 0), function($builder) {
                $builder->where('status', 'Active');
            })*/
            ->when(request('q'), function($builder) {
                $builder->searchQuery(request('q'));
            })
            ->paginate(10);

        // Queue job for logging
        if (request('q')) {
            $this->logSearch(request('q'), $projects->total());
        }

        return view ('projects.search-results', [
            'title' => 'Civic Tech Field Guide - Directory',
            'projects' => $projects,
            'query' => request('q'),
            'filterCategories' => request('categories'),
            'filterTags' => request('tags'),
            'filterCountries' => request('countries'),
            'filterStatus' => request('status'),
            'filterOrgTypes' => request('organizationtypes'),
        ]);

    }

    // Get world map
    public function worldMap() {
        $projects = Listing::whereNotNull('latitude')->whereNotNull('longitude')->get(['latitude', 'longitude', 'first_location', 'name', 'slug']);

        return view ('map.all-projects', [
            'title' => 'Civic Tech Field Guide - World Map',
            'projects' => $projects,
            'template' => 'map',
        ]);
    }

    // Log Search
    public function logSearch($query, $total) {
        // Create new entry
        $log = new SearchLog;
        $log->item = $query;
        $log->search_count =  $total;
        $log->total_results_count = $total;
        $log->last_search_results_count = $total;
        $log->save();
    }
}
