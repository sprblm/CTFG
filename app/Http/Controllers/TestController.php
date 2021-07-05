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
        $pct = ParentCategory::where('name', 'The Tech')->first();
        $pcp = ParentCategory::where('name', 'The People')->first();

        $c = Category::where('airtable_id', 'recnEr19ozHZMxhcR')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recmrEYFSv9YkDrHi')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recnYt58sH3KalWlu')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recoUoaehHze46Ulp')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recoyckakCw5GJ6tO')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recbd0P6IpVs74yWK')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recqNm6j8BZCaVRxZ')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recrDOucQ9Hdirp8U')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recrP85oWFwBXvBoz')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recryxar3AU8DxMN9')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recszKZTkaK6zYt1v')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recu8n4DTEp1Um07r')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recXuSaEeB2Eaq2Yx')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recYEptVWdclb8Eb4')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recYg2hUICuQdrF76')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recZaCcBrhMwDVqk5')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recZinH27ttOW5WOj')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recav9UjYjHadRjBv')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recf67AaQhBn8HG7A')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recfxzCazsK6PSp5Y')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recgsIAmClTwo5Doe')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'rechfhfBZxRXwaU4Z')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'reci9MMoTL3fWXV3i')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recisK0GUMINUDC5A')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recHjjh9byUZ9KggC')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recIPL1I3FihTZZto')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recIaiLPSxvsyw9hT')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recJFMA9bLzdcy3sS')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recJa7tTzfZxmCevc')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recK4opGj3MzhyxpE')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recKzLOjTRN5qiNf6')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recNHJAbwl1ldBDHt')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recNJpStcUIAfmTtY')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recNdtQtNHJeWFzyi')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recPOTNhDferPt9Rj')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recPdR6bIzGKdSLkQ')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recPn29ffhlHUSbEy')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recRFfl8CCoZkhxeU')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recRvgg7h5fAb12Ah')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recSqO2jwYA2sD37s')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'rec2FbVcZGIZJrVCE')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'rec2aPEqmt34FAVcV')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'rec3QYFe6MEk113hX')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'rec6hA1DbBcFwMaJD')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'rec81Fvpa4c92gfSj')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'rec8LSrOViIqsEvue')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recA1g3XtqZgkRocx')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recAkyqEoFvFmqVXX')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recAqXKO8sbNDdhas')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recAqXcSJgUKKcceL')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recCj9bIftbe1jQLs')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);

        $c = Category::where('airtable_id', 'recFLmpUrUAu0hATg')->first();
        $c->update([
            'parent_category_id' => $pct->id,
        ]);



        /*$pc = new ParentCategory;
        $pc->name = "The Tech";
        $pc->save();

        $pc = new ParentCategory;
        $pc->name = "The People";
        $pc->save(); */

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
