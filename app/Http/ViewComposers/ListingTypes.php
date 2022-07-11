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
        $types = Listing::distinct('type')->orderBy('type', 'DESC')->pluck('type');

        $typesArray = array();
        foreach ($types as $type) {
            if (empty($type)) {
                $type = "Other";
            }

            array_push($typesArray, $type);
        }
        
        $this->types = $typesArray;
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