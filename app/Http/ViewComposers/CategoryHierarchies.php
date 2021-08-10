<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\AncestorCategory;
use App\Models\GrandParentCategory;
use App\Models\ParentCategory;
use App\Models\Category;

class CategoryHierarchies
{
    public $ancestors = [];
    public $grandParents = [];
    public $catHierarchies;
    
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct() {
        $ancestors = AncestorCategory::orderBy('name')->get();
        $this->ancestors = $ancestors;

        $grandParents = GrandParentCategory::whereNull('ancestor_category_id')->orderBy('name')->get();
        $this->grandParents = $grandParents;

        $parentlessCategories = Category::whereNull('parent_category_id')->orderBy('name')->get();
        $this->parentlessCategories = $parentlessCategories;

        $catHierarchies = Category::whereNull('parent_id')->with('childItems')->get();
        $this->catHierarchies = $catHierarchies;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with(['parentlessCategories' => $this->parentlessCategories, 'grandParents' => $this->grandParents, 'catHierarchies' => $this->catHierarchies, 'ancestors' => $this->ancestors]);
    }
}