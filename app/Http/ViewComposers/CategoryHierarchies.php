<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

use Cache;

use App\Models\Category;

class CategoryHierarchies {
    public $catHierarchies;
    
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct() {
        /*$catHierarchies = Category::whereNull('parent_id')->whereIn('name', ['The Tech', 'The People', 'Adjacent Fields', 'More'])->orderByRaw("FIELD(name , 'The Tech', 'The People', 'Adjacent Fields', 'More') ASC")->with('childItems')->get();

        $this->catHierarchies = $catHierarchies;*/
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view) {
        //$view->with(['catHierarchies' => $this->catHierarchies]);
    }
}