<?php

namespace App\Http\Controllers\Airtable\Sync;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Airtable;
use DB;

use App\Models\Funding;

class FundingController extends Controller {
    public function syncFunding () {
        \Log::info("Funding table sync started at ".date('Y-m-d H:i:s'));

        if (Funding::count() > 0) {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            Funding::truncate();
        }

        // Recreate categories
        $funding = Airtable::table('funding')->all();
        
        foreach ($funding as $f) {
            $fund = new Funding;
            $fund->airtable_id = @$f["id"];
            $fund->funding_date = @$f["fields"]["Date"];
            $fund->post_modified_date = @$f["fields"]["Post modified date"];
            $fund->amount = floatval(str_replace(',', '', @$f["fields"]["Funding_amount"]));
            $fund->funded_by = @$f["fields"]["Funding_funded_by_who"];
            $fund->when_funded = @$f["fields"]["Funding_when_funded"];
            $fund->link = @$f["fields"]["Funding_fundinglink"];
            $fund->acquired_by_who = @$f["fields"]["Acquision_acquired_by_who"];
            $fund->acquired_when = @$f["fields"]["Acquision_acquired_when"];
            $fund->acquision_amount = floatval(str_replace(',', '', @$f["fields"]["Acquision_acquision_amount"]));
            $fund->save();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $count = Funding::count();
        \Log::info("Funding table sync finished at ".date('Y-m-d H:i:s')." ... ".$count." records synced.");
    }
}
