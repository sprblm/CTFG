<?php

namespace App\Http\Controllers\Airtable\Sync;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Airtable;
use DB;

use App\Models\Tag;

class TagController extends Controller {
    public function syncTag () {
        \Log::info("Tag table sync started at ".date('Y-m-d H:i:s'));

        if (Tag::count() > 0) {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            Tag::truncate();
        }

        // Recreate people
        $tags = Airtable::table('tags')->all();
        
        foreach ($tags as $f) {
            $tg = new Tag;
            $tg->airtable_id = @$f["id"];
            $tg->name = @$f["fields"]["Name"];
            $tg->save();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $count = Tag::count();
        \Log::info("Tags table sync finished at ".date('Y-m-d H:i:s')." ... ".$count." records synced.");
    }
}
