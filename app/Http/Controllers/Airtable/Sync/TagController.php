<?php

namespace App\Http\Controllers\Airtable\Sync;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Airtable;
use DB;

use App\Models\Tag;

class TagController extends Controller {
    /**
     * Sync tags table - Truncates the
     * table and recreates it with Airtable data
     * 
     * @return void
     */ 
    public function syncTag () {
        \Log::info("Tag table sync started at ".date('Y-m-d H:i:s'));

        $tags = Airtable::table('tags')->all();
        if ((Tag::count() > 0) && (sizeof($tags) > 0)) {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            Tag::truncate();
        }

        // Recreate tags
        foreach ($tags as $f) {
            $tg = new Tag;
            $tg->airtable_id = @$f["id"];
            $tg->name = @$f["fields"]["Name"];
            $tg->order_sort = @$f["fields"]["Order"];
            $tg->save();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Update tag parent tag relationship
        foreach ($tags as $tag) {
            if (!empty(@$tag["fields"]["Parent Tag"]) && sizeof(@$tag["fields"]["Parent Tag"]) > 0) {

                $dbTag = Tag::where('airtable_id', $tag["id"])->first();
                if ($dbTag) {
                    $parentTag = Tag::where('airtable_id', $tag["fields"]["Parent Tag"][0])->first();
                    if ($parentTag) {
                        $dbTag->update([
                            'parent_id' => $parentTag->id,
                        ]);
                    }
                }
            }

        }

        $count = Tag::count();
        \Log::info("Tags table sync finished at ".date('Y-m-d H:i:s')." ... ".$count." records synced.");
    }
}
