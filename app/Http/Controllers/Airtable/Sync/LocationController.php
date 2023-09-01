<?php

namespace App\Http\Controllers\Airtable\Sync;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Airtable;
use DB;

use App\Models\Location;
use App\Models\Country;
use App\Models\Boundary;

class LocationController extends Controller {
    /**
     * Sync locations - truncate current database locations, fill the table
     * with new Airtable locations
     */ 
    public function syncLocation () {
        \Log::info("Location table sync started at ".date('Y-m-d H:i:s'));
        $locations = Airtable::table('locations')->all();


        if ((Location::count() > 0) && (sizeof($locations) > 0)) {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            Location::truncate();
        }

        // Recreate locations
        foreach($locations as $loc) {
            $boundary = @$loc["fields"]["Boundaries"][0];
            $boundary = Boundary::where('airtable_id', $boundary)->first();
            $country = null;
            if ($boundary) {
                $country = $boundary->name;
            }

            $lc = new Location;
            $lc->airtable_id = @$loc["id"];
            $lc->name = @$loc["fields"]["Name"];
            $lc->country = $country;
            $lc->save();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        //Sync country names

        $count = Location::count();
        \Log::info("Location table sync finished at ".date('Y-m-d H:i:s')." ... ".$count." records synced.");
    }

    /**
     * Sync country names
     * 
     */
    public function syncCountryNames() {
        // Turkey
        $alias = "Türkiye";
        $turkey = Location::where('name', 'LIKE', '%'.$alias.'%')->get();
        if ($turkey->count() > 0) {
            foreach ($turkey as $tk) {
                $tk->update([
                    'country' => 'Turkey',
                ]);
            }
        }
    } 
}
