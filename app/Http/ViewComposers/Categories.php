<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Category;

class Categories
{
    public $categories = [];
    
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct() {
        $categories = Category::distinct('name')->orderBy('name')->orderBy('hits', 'DESC')->get();
        
        $this->categories = $categories;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with(['categories' => $this->categories]);
    }
}