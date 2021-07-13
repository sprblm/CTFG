<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Category;

class ParentlessCategories
{
    public $parentlessCategories = [];
    
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct() {
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
        $view->with(['parentlessCategories' => $this->parentlessCategories]);
    }
}