<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class TestController extends Controller {
    
    public function test(Request $request){
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

        $cats = Category::limit(1)->get();

        foreach ($cats as $cat) {
            echo "Name: ".$cat->name;
            echo "<br><br>";
            print_r($cat->listings);
        }
    }	

    

}
