<?php

namespace App\Http\Controllers\Airtable\Sync;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Airtable;
use DB;

use App\Models\Boundary;

class BoundaryController extends Controller {
    public function syncBoundary () {
        \Log::info("Boundary table sync started at ".date('Y-m-d H:i:s'));

        $boundaries = Airtable::table('boundaries')->all();
        if ((Boundary::count() > 0) && (sizeof($boundaries) > 0)) {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            Boundary::truncate();
        }

        // Recreate categories
        foreach ($boundaries as $record) {
            $boundary = new Boundary;
            $boundary->airtable_id = @$record["id"];
            $boundary->name = @$record["fields"]["Name"];
            $boundary->iso2 = @$record["fields"]["ISO2"];
            $boundary->iso3 = @$record["fields"]["ISO3"];
            $boundary->iso_numeric = @$record["fields"]["ISO-numeric"];
            $boundary->type = @$record["fields"]["Type"];
            $boundary->save();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $count = Boundary::count();
        \Log::info("Boundary table sync finished at ".date('Y-m-d H:i:s')." ... ".$count." records synced.");
    }
}
