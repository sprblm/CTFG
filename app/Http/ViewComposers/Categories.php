<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use DB;

class Categories
{
    public $categories = [];
    
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct() {
        $categories = DB::table('listing_categories')->distinct('parent_category')->get();
        
        //$this->categories = collect($categories);
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