<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Listing;

class ListingTypes
{
    public $types = [];
    
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct() {
        $types = Listing::distinct('type')->whereNotNull('type')->orderBy('type')->pluck('type');

        /*foreach ($types as $type) {
            if (empty($type)) {
                $type = "Other";
            } 

        } */
        
        $this->types = $types;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with(['listingTypes' => $this->types]);
    }
}