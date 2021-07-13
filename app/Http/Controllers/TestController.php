<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Airtable;
use Illuminate\Support\Str;

use App\Models\Category;
use App\Models\Listing;
use App\Models\Media;
use App\Models\Location;
use App\Models\ParentCategory;
use App\Models\Country;

class TestController extends Controller {
    
    public function test(Request $request){
        /*$locations = Location::get();

        foreach($locations as $loc) {
            $pieces = explode(' ', $loc->name);
            $country = array_pop($pieces);

            if ($country == "USA" || $country == "United States" || $country == "United States of America") {
                $country = "United States of America";
            }

            if ($country == "UK" || $country == "United Kingdom") {
                $country = "United Kingdom";
            }

            $ct = Country::where('country', $country)->first();
            if ($ct) {
                //echo "Present Country: ".$ct->country."<br>";
                $loc->update([
                    'country' => $ct->country
                ]);
            }
        }*/

        echo Location::count();
        echo "<br>";
        echo Location::distinct('country')->count();

        

        /*$cats = Airtable::table('categories')->all();
        
        foreach($cats as $cat) {
            $category = Category::where('airtable_id', $cat["id"])->first();
            if (!empty($cat["fields"]["Parent Category"][0])) {
                $pc = Category::where('airtable_id', $cat["fields"]["Parent Category"][0])->first();
                if ($pc) {
                    $pcdb = ParentCategory::where('name', $pc->name)->first();
                    if ($pcdb) {
                        $category->update([
                            'parent_category_id' => $pcdb->id
                        ]);
                    } else {
                        $pcdb = new ParentCategory;
                        $pcdb->name = $pc->name;
                        $pcdb->save();

                        $category->update([
                            'parent_category_id' => $pcdb->id
                        ]);
                    }
                    
                } else {
                    $rec = Airtable::table('categories')->find($cat["fields"]["Parent Category"][0]);

                    $pcdb = ParentCategory::where('name', $rec["fields"]["Name"])->first();

                    if ($pcdb) {
                        $category->update([
                            'parent_category_id' => $pcdb->id
                        ]);
                    } else {
                        $pc = new ParentCategory;
                        $pc->name = $rec["fields"]["Name"];
                        $pc->save();

                        $category->update([
                            'parent_category_id' => $pc->id
                        ]);
                    }
                    
                } 
            }
        } */

        //$rec = Airtable::table('categories')->find('recgsIAmClTwo5Doe');
        //echo sizeof($rec);
        //print_r($rec);

        /*foreach ($cats as $cat) {
            echo $cat->name."<br>";
        }*/

        /*$projects = DB::table('listings')->paginate(10); */

        /*return view ('welcome', [
            'title' => 'CTFG',
            'projects' => $projects,
        ]); */

        /*$listings = DB::table('listings')->limit(50)->get();

        foreach ($listings as $list) {
            echo "Name: ".$list->project_name;
            echo "<br>";
            echo "ID: ".$list->id;
            echo "<br>";
            echo "Concated ID: ".'{'.$list->id.'}';
            echo "<br>";

            $location = DB::table('listing_locations')->where('listings_2', '{'.$list->id.'}')->get();
            echo "Count L: ".$location->count();
            echo "<br>";

            $media = DB::table('media')->where('listings', '{'.$list->id.'}')->get();
            echo "Count M: ".$media->count();
            echo "<br>";

            $tags = DB::table('listing_tags')->where('listings', '{'.$list->id.'}')->get();
            echo "Count T: ".$tags->count();
            echo "<br>";

            $cats = DB::table('listing_categories')->where('listings', '{'.$list->id.'}')->get();
            echo "Count C: ".$cats->count();
            echo "<br><br>";
        } */

        /*$images = Media::whereIn('listings', '{'.$listings[0]->project_name.'}')->get();

        echo $images->count();*/
    }	

    

}
