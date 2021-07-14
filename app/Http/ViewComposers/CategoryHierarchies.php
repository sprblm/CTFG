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
    public $catHierachies = [];
    
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

        $catHierachies = Category::get();
        $this->catHierachies = $catHierachies;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with(['parentlessCategories' => $this->parentlessCategories, 'grandParents' => $this->grandParents, 'catHierachies' => $this->catHierachies, 'ancestors' => $this->ancestors]);
    }
}