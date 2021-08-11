<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

use App\Models\Category;

class CategoryHierarchies {
    public $catHierarchies;
    
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct() {
        $catHierarchies = Category::whereNull('parent_id')->with('childItems')->get();
        $this->catHierarchies = $catHierarchies;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view) {
        $view->with(['catHierarchies' => $this->catHierarchies]);
    }
}