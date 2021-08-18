<?php

namespace App\Http\Controllers\Airtable\Sync;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Airtable;
use DB;

use App\Models\People;

class PeopleController extends Controller {
    public function syncPeople () {
        \Log::info("People table sync started at ".date('Y-m-d H:i:s'));

        if (People::count() > 0) {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            People::truncate();
        }

        // Recreate people
        $people = Airtable::table('people')->all();
        
        foreach ($people as $f) {
            $pp = new People;
            $pp->airtable_id = @$f["id"];
            $pp->name = @$f["fields"]["Name"];
            $pp->email = @$f["fields"]["Email"];
            $pp->save();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $count = People::count();
        \Log::info("People table sync finished at ".date('Y-m-d H:i:s')." ... ".$count." records synced.");
    }
}
