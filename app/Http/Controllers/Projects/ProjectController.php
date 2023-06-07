<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

use App\Jobs\LogSearch;

use App\Models\Listing;
use App\Models\SearchLog;
use App\Models\Category;
use App\Models\Tag;

class ProjectController extends Controller {
    // Embed add project Airtable form view
    public function add() {
        return view('projects.add', [
            'title' => 'Share a project',
            'menu' => 'add-project'
        ]);
    }

    // Get a single project - by name
    public function singleProject(Request $request) {
        $slug = $request->segment(2);

        $project = Listing::where('slug', $slug)->first();

        if (!$project) {
            return abort(404);
        }

        // Update category hits
        foreach ($project->categories as $cat) {
            $cat->update([
                'hits' => $cat->hits + 1,
            ]);
        }

        return view('projects.single', [
            'title' => 'Project - '.$project->name,
            'menu' => 'directory',
            'project' => $project,
            'gMapsApiKey' => config('services.google.key'),
        ]);
    }

    // Search
    public function search(Request $request) {
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

                $builder->when(count($countries),function ($builder) use ($countries) {
                    $builder->whereHas('location', function($builder) use ($countries) {
                        $builder->where( function($builder) use ($countries) {
                            foreach ($countries as $country) {
                                //$builder->orWhere('country', 'LIKE', '%' . $country . '%');
                                $builder->orWhere('name', 'LIKE', '%' . $country . '%');
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
                $builder->where('status', request('status'));
            }, function($builder){
                //Different from guest controller since when checkbox not checked, we should load everything.
                $builder->whereIn('status', ['Active', 'Inactive', 'N/A', 'Document',])->orWhereNull('status');
            })
            ->when(request('q'), function($builder) {
                $builder->searchQuery(request('q'));
            })
            ->orderBy('created', 'DESC')
            ->paginate(10);

        // Queue job for logging
        if (request('q')) {
            $this->logSearch(request('q'), $projects->total());
        }

        if (count(request()->all()) == 0) {
            $filterStatus = "Active";
        } else if(request('status')){
            $filterStatus = request('status');
        } else {
            $filterStatus = '';
        }

        $allProjects = Listing::count();

        return view ('projects.search-results', [
            'title' => 'Civic Tech Field Guide - Directory',
            'menu' => 'directory',
            'projects' => $projects,
            'query' => request('q'),
            'filterCategories' => request('categories'),
            'filterTags' => request('tags'),
            'filterCountries' => request('countries'),
            //'filterStatus' => request('status'),
            'filterStatus' => $filterStatus,
            'filterOrgTypes' => request('organizationtypes'),
            'filterOpenSource' => request('opensource'),
            'filterTypes' => request('types'),
            'allProjects' => $allProjects,
        ]);

    }

    // Search autocomplete
    public function searchAutoComplete(Request $request) {
        $q = $request->query->get('query');
        $data = Listing::select("name", "slug")
                ->where("name", "LIKE", "%{$q}%")
                ->orWhere("introduction", "LIKE", "%{$q}%")
                ->get();
   
        return response()->json($data);
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
