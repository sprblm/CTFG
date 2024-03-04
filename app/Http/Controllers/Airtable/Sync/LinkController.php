<?php

namespace App\Http\Controllers\Airtable\Sync;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Airtable;
use DB;
use Carbon\Carbon;

use App\Models\Link;

class LinkController extends Controller {
    /**
     * Sync links table - Truncates the
     * table and recreates it with Airtable data
     * 
     * @return void
     */ 
    public function syncLinks() {
        \Log::info("Links table sync started at ".date('Y-m-d H:i:s'));

        $links = Airtable::table('links')->all();
        
        if ((Link::count() > 0) && (sizeof($links) > 0)) {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            Link::truncate();
        }

        // Recreate links
        foreach ($links as $record) {
            $link = new Link;
            $link->airtable_id = @$record["id"];
            $link->notes = @$record["fields"]["Notes"];
            $link->type = @$record["fields"]["Type"];
            $link->link = @$record["fields"]["Link"];
            $link->airtable_created_at = Carbon::parse($links[0]['createdTime'])->format('Y-m-d H:i:s');
            $link->save();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $count = Link::count();
        \Log::info("Links table sync finished at ".date('Y-m-d H:i:s')." ... ".$count." records synced.");
    }
}
