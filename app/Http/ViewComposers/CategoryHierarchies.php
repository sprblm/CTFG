<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

use Cache;

use App\Models\Category;
use App\Models\Tag;

class CategoryHierarchies {
    public $catHierarchies;
    public $tagHierarchies;
    
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct() {
        /*$catHierarchies = Cache::remember('category-hierarchies', 43200, function () {
            return Category::whereNull('parent_id')->whereIn('name', ['The Tech', 'The People', 'Adjacent Fields', 'More'])->orderByRaw("FIELD(name , 'The Tech', 'The People', 'Adjacent Fields', 'More') ASC")->with('childItems')->get();
        });

        $tagHierarchies = Cache::remember('tag-hierarchies', 43200, function () {
            return Tag::whereNull('parent_id')->with('childItems')->get();
        }); */


        $catHierarchies = Category::whereNull('parent_id')->whereIn('name', ['The Tech', 'The People', 'Adjacent Fields', 'More'])->orderByRaw("FIELD(name , 'The Tech', 'The People', 'Adjacent Fields', 'More') ASC")->with('childItems')->get();

        $tagHierarchies = Tag::whereNull('parent_id')
            ->whereIn('name', ['Issue', 'Format', 'Community', 'Current event', 'Sustainable Development Goals', 'Political unit', 'Platform', 'Feature', 'coop', 'Other'])
            ->orderByRaw("FIELD(name , 'Issue', 'Format', 'Community', 'Current event', 'Sustainable Development Goals', 'Political unit', 'Platform', 'Feature', 'coop', 'Other') ASC")
            ->with('childItems')
            ->get();

        $this->catHierarchies = $catHierarchies;
        $this->tagHierarchies = $tagHierarchies;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view) {
        $view->with(['catHierarchies' => $this->catHierarchies, 'tagHierarchies' => $this->tagHierarchies]);
    }
}