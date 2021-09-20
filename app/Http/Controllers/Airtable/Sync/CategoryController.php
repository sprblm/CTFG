<?php

namespace App\Http\Controllers\Airtable\Sync;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Airtable;

use App\Models\Category;

class CategoryController extends Controller {
    public function syncCategories () {
        \Log::info("Categories sync started at ".date('Y-m-d H:i:s'));

        if (Category::count() > 0) {
            Category::truncate();
        }

        // Recreate categories
        $airtableCategories = Airtable::table('categories')->all();

        //print_r($airtableCategories[0]);

        //echo $airtableCategories[0]["fields"]["Name"];
        
        foreach ($airtableCategories as $cat) {
            if(!empty(@$cat["fields"]["Name"])){
                $c = new Category;
                $c->airtable_id = @$cat["id"];
                $c->name = @$cat["fields"]["Name"];
                $c->description = strip_tags(@$cat["fields"]["Description"]);
                $c->slug = Str::of(@$cat["fields"]["Name"])->slug();
                $c->save();
            }
        }

        // Update category parent category relationship
        foreach ($airtableCategories as $cat) {
            if (!empty(@$cat["fields"]["Parent Category"]) && sizeof(@$cat["fields"]["Parent Category"]) > 0) {
                $dbCat = Category::where('airtable_id', $cat["id"])->first();
                if ($dbCat) {
                    $parentCat = Category::where('airtable_id', $cat["fields"]["Parent Category"][0])->first();
                    if ($parentCat) {
                        $dbCat->update([
                            'parent_id' => $parentCat->id
                        ]);
                    }
                }
            }
        }

        $count = Category::count();
        \Log::info("Categories sync finished at ".date('Y-m-d H:i:s')." ... ".$count." records synced.");
    }
}
