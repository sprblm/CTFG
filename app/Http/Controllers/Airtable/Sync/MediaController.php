<?php

namespace App\Http\Controllers\Airtable\Sync;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Airtable;
use DB;

use App\Models\Media;

class MediaController extends Controller {
    public function syncMedia () {
        \Log::info("Media table sync started at ".date('Y-m-d H:i:s'));

        if (Media::count() > 0) {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            Media::truncate();
        }

        // Recreate media
        $media = Airtable::table('media')->all();
        
        foreach ($media as $f) {
            $md = new Media;
            $md->airtable_id = @$f["id"];
            $md->link = @$f["fields"]["Link"];
            $md->type = @$f["fields"]["Type"];
            $md->save();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $count = Media::count();
        \Log::info("Media table sync finished at ".date('Y-m-d H:i:s')." ... ".$count." records synced.");
    }
}
