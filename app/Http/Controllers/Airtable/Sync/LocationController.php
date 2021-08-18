<?php

namespace App\Http\Controllers\Airtable\Sync;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Airtable;
use DB;

use App\Models\Location;
use App\Models\Country;

class LocationController extends Controller {
    public function syncLocation () {
        \Log::info("Location table sync started at ".date('Y-m-d H:i:s'));

        if (Location::count() > 0) {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            Location::truncate();
        }

        // Recreate categories
        $locations = Airtable::table('locations')->all();

        foreach($locations as $loc) {
            $lc = new Location;
            $lc->airtable_id = @$loc["id"];
            $lc->name = @$loc["fields"]["Name"];
            $lc->save();
        }
        
        $dbLocations = Location::get();
        foreach($dbLocations as $loc) {
            $pieces = explode(' ', $loc->name);
            $country = array_pop($pieces);

            if ($country == "USA" || $country == "United States" || $country == "United States of America") {
                $country = "United States of America";
            }

            if ($country == "UK" || $country == "United Kingdom") {
                $country = "United Kingdom";
            }

            $ct = Country::where('country', $country)->first();
            if ($ct) {
                $loc->update([
                    'country' => $ct->country
                ]);
            }
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $count = Location::count();
        \Log::info("Location table sync finished at ".date('Y-m-d H:i:s')." ... ".$count." records synced.");
    }
}
