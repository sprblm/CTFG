<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Listing;

class OrganizationTypes
{
    public $organizationTypes = [];
    
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct() {
        $types = Listing::distinct('organization_type')->orderBy('organization_type', 'DESC')->pluck('organization_type');

        $typesArray = array();
        foreach ($types as $type) {
            if (empty($type)) {
                $type = "Other";
            }

            array_push($typesArray, $type);
        }
        
        $this->organizationTypes = $typesArray;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with(['organizationTypes' => $this->organizationTypes]);
    }
}