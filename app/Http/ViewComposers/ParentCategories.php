<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\ParentCategory;

class ParentCategories
{
    public $parentCategories = [];
    
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct() {
        $parentCategories = ParentCategory::distinct('name')->orderBy('name')->get();
        
        $this->parentCategories = $parentCategories;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with(['parentCategories' => $this->parentCategories]);
    }
}