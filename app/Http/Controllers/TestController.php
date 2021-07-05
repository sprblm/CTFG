<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Models\Category;
use App\Models\Listing;
use App\Models\Media;
use App\Models\Location;
use App\Models\ParentCategory;

class TestController extends Controller {
    
    public function test(Request $request){
        $pc = new ParentCategory;
        $pc->name = "The Tech";
        $pc->save();

        $pc = new ParentCategory;
        $pc->name = "The People";
        $pc->save();

    	//$projects = DB::table('listings')->limit(5)->get();
        //print_r($projects);

        /*foreach ($projects as $project) {
            echo "Name: ".$project->images."<br>";
        }*/

        //$cats = DB::table('listing_categories')->get();
        /*$cats = DB::table('listing_categories')->distinct('parent_category')->get();
        
        foreach ($cats as $cat) {
            echo $cat->name."<br>";
        } */

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
