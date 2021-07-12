<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Tag;

class Tags
{
    public $tags = [];
    
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct() {
        $tags = Tag::distinct('name')->orderBy('name')->get();
        
        $this->tags = $tags;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with(['allTags' => $this->tags]);
    }
}