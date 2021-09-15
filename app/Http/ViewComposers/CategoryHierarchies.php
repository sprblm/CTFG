<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

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
        $catHierarchies = Category::whereNull('parent_id')->whereIn('name', ['The Tech', 'The People', 'Adjacent Fields', 'More'])->orderByRaw("FIELD(name , 'The Tech', 'The People', 'Adjacent Fields', 'More') ASC")->with('childItems')->get();

        $tagHierarchies = Tag::whereNull('parent_id')->with('childItems')->get();

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