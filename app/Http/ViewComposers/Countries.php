<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Country;
use App\Models\Location;
use App\Models\Boundary;

class Countries
{
    public $countries = [];
    
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct() {
        //$countries = Location::select('country')->distinct()->orderBy('country')->get();
        $countries = Boundary::select('name')->distinct()->orderBy('name')->get();
        $this->countries = $countries;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with(['allCountries' => $this->countries]);
    }
}