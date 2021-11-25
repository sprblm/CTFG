<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Airtable;
use Illuminate\Support\Str;
use DOMDocument;

use App\Models\Category;
use App\Models\Listing;
use App\Models\Media;
use App\Models\Location;
use App\Models\ParentCategory;
use App\Models\GrandParentCategory;
use App\Models\AncestorCategory;
use App\Models\Country;
use App\Models\Tag;

use Carbon\Carbon;

class TestController extends Controller {
    public function test(Request $request) {
        echo count(request()->all());

        /*$types = Listing::distinct('type')->whereNotNull('type')->orderBy('type')->pluck('type');

        foreach ($types as $type) {
            if (empty($type)) {
                $type = "Other";
            } 

            echo $type."<br>";
        } */

        /*$tags = Tag::distinct('name')->orderBy('name')->get();

        print_r($tags);*/

        //\Log::info("\n");

        /*$projects = Listing::get();

        foreach ($projects as $pj) {
            $pj->update([
                'first_location' => @$pj->location->first()->name,
                'first_country' => @$pj->location->first()->country,
            ]);
        } */


        //echo bcrypt("Admin");
        /*$to = Carbon::createFromFormat('Y-m-d H:s:i', date('Y-m-d H:i:s'));
        $start = Carbon::createFromFormat('Y-m-d H:s:i', date('Y-m-d H:i:s'));
        \Log::info("Attaching funding sync finished at - ".date('Y-m-d H:i:s')." - ".$to->diffInMinutes($start)." minutes."); */

        //$items = Category::whereNull('parent_id')->with('childItems')->get();

        //$items = Category::where('name', 'More')->with('childItems')->get();

        //return view('test', compact('items'));

        /*$listings = Listing::get();
        foreach($listings as $list) {
            $string = $list->raw_description;
            if (!empty($string)) {
                $dom = new DOMDocument('1.0', 'UTF-8');
                $internalErrors = libxml_use_internal_errors(true);
                $dom->loadHTML($string);
                libxml_use_internal_errors($internalErrors);

                $foundTwitter = 0;
                foreach($dom->getElementsByTagName('*') as $element ){
                    if ($element->tagName == "iframe") {
                        $parsed = $this->get_string_between($string, '<iframe', '</iframe>');

                        $iframe = '<iframe '.$parsed.'</iframe>';
                        $list->update([
                            'has_iframe_embed' => $iframe
                        ]);
                    }

                    
                    if ($element->tagName == "a") {
                        $parsed = $this->get_string_between($string, '<a class="twitter-timeline"', 'Tweets');
                        if (!empty($parsed) && $foundTwitter == 0) {
                            $twitter = '<a class="twitter-timeline" '.$parsed.'</a>';
                            $list->update([
                                'has_twitter_feed' => $twitter
                            ]);
                            $foundTwitter = 1;
                        }
                    }

                }
            }

        } */

        /*$results = [];
        foreach ($iframes as $iframe) {
            if ($attr = $iframe->attributes->getNamedItem('loading') !== null) {
                $results['loading'] = $attr;
            }
        } */

        //echo $string;


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

        /*$parentlesscategories = Category::whereNull('parent_category_id')->get();
        echo $parentlesscategories->count();*/


        // $rec = Airtable::table('categories')->find($cat["fields"]["Parent Category"][0]);

        /*$gpcs = GrandParentCategory::get();
        foreach ($gpcs as $gpc) {
            $cat = Category::where('airtable_id', $gpc->airtable_id)->first();
            if ($cat) {
                $gpc->update([
                    'name' => $cat->name
                ]);
            }
        } */

        /*$gpcs = GrandParentCategory::get();

        $count = 0;
        foreach ($gpcs as $gpc) {
            $rec = Airtable::table('categories')->find($gpc->airtable_id);

            if (!empty($rec["fields"]["Parent Category"][0])) {
                $cat = Category::where('airtable_id', $rec["fields"]["Parent Category"][0])->first();

                $ancestor = AncestorCategory::where('airtable_id', $rec["fields"]["Parent Category"][0])->first();

                if ($ancestor) {
                    if ($gpc) {
                        $gpc->update([
                            'ancestor_category_id' => $ancestor->id
                        ]);
                    }
                } else {
                    $ancestor = new AncestorCategory;
                    $ancestor->airtable_id = $rec["fields"]["Parent Category"][0];
                    $ancestor->name = $cat->name;
                    $ancestor->save();

                    if ($gpc) {
                        $gpc->update([
                            'ancestor_category_id' => $ancestor->id
                        ]);
                    }
                }

                $count += 1;
                if ($count >= 5) {
                    sleep(2);
                    $count = 0;
                }
            }

        } */

        /*$pcdb = ParentCategory::where('name', $rec["fields"]["Name"])->first();

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
        } */
        
        

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
