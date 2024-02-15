<?php

namespace App\Http\Controllers\Airtable\Sync;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Airtable;
use DB;

use App\Models\Impact;

class ImpactController extends Controller {
    /**
     * Sync impact table - Truncates the
     * table and recreates it with Airtable data
     * 
     * @return void
     */ 
    public function syncImpact () {
        \Log::info("Impact table sync started at ".date('Y-m-d H:i:s'));

        $impact = Airtable::table('impact')->all();
        if ((Impact::count() > 0) && (sizeof($impact) > 0)) {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            Impact::truncate();
        }

        // Recreate impacts
        foreach ($impact as $f) {
            $imp = new Impact;
            $imp->airtable_id = @$f["id"];
            $imp->impact_date = @$f["fields"]["Date"];
            $imp->post_modified_date = @$f["fields"]["Post modified date"];
            $imp->url = @$f["fields"]["Impact_impact_url"];
            $imp->statement = @$f["fields"]["Impact_impact_statement"];
            $imp->save();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $count = Impact::count();
        \Log::info("Impact table sync finished at ".date('Y-m-d H:i:s')." ... ".$count." records synced.");
    }
}
