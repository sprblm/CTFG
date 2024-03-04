<?php

namespace App\Http\Controllers\Airtable\Sync;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Airtable;
use DB;

use App\Models\Knowledge;

class KnowledgeController extends Controller {
    /**
     * Sync knowledge table - Truncates the
     * table and recreates it with Airtable data
     * 
     * @return void
     */ 
    public function syncKnowledge () {
        \Log::info("Knowledge table sync started at ".date('Y-m-d H:i:s'));

        $knowledge = Airtable::table('knowledge')->all();
        
        if ((Knowledge::count() > 0) && (sizeof($knowledge) > 0)) {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            Knowledge::truncate();
        }

        // Recreate knowledge
        foreach ($knowledge as $f) {
            $kng = new Knowledge;
            $kng->airtable_id = @$f["id"];
            $kng->name = @$f["fields"]["Name"];
            $kng->description = @$f["fields"]["Description"];
            $kng->url = @$f["fields"]["URL"];
            $kng->tag = @$f["fields"]["Tags"][0];
            $kng->twitter = @$f["fields"]["Twitter"][0];
            $kng->facebook = @$f["fields"]["Facebook"][0];
            $kng->rss = @$f["fields"]["RSS"][0];
            $kng->github = @$f["fields"]["Github"][0];
            $kng->email = @$f["fields"]["Email"];
            $kng->phone = @$f["fields"]["Phone"];
            $kng->save();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $count = Knowledge::count();
        \Log::info("Knowledge table sync finished at ".date('Y-m-d H:i:s')." ... ".$count." records synced.");
    }
}
