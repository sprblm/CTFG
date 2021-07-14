<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\GrandParentCategory;
use App\Models\ParentCategory;
use App\Models\Category;

class CategoryHierarchies
{
    public $parentCategories = [];
    public $parentlessCategories = [];
    
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct() {
        $parentCategories = ParentCategory::distinct('name')->orderBy('name')->get();
        $this->parentCategories = $parentCategories;

        $parentlessCategories = Category::whereNull('parent_category_id')->orderBy('name')->get();
        $this->parentlessCategories = $parentlessCategories;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with(['parentCategories' => $this->parentCategories, 'parentlessCategories' => $this->parentlessCategories]);
    }
}