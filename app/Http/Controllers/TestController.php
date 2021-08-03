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

class TestController extends Controller {
    
    public function test(Request $request) {
        $string = '
            <p><iframe loading="lazy" style="border: 1px solid #CCC; border-width: 1px; margin-bottom: 5px; max-width: 100%;" src="//www.slideshare.net/slideshow/embed_code/key/lnoOgCXrjl9I1X" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" allowfullscreen="allowfullscreen"> </iframe></p><div style="margin-bottom: 5px;"><strong> <a title="Improving Civic Discourse on Facebook, Facebook Civic Engagement Team" href="//www.slideshare.net/mysociety/improving-civic-discourse-on-facebook-facebooks-civic-engagement-team" target="_blank" rel="noopener noreferrer">Improving Civic Discourse on Facebook, Facebook’s Civic Engagement Team</a> </strong> from <strong><a href="https://www.slideshare.net/mysociety" target="_blank" rel="noopener noreferrer">mysociety</a></strong></div> <a class="twitter-timeline" data-width="900" data-height="1000" data-dnt="true" href="https://twitter.com/samidh" data-tweet-limit="5">Tweets by </a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> <div id="jp-relatedposts" class="jp-relatedposts"><h3 class="jp-relatedposts-headline"><em>Related</em></h3></div>
            ';

        $dom = new DOMDocument();
        $dom->loadHTML($string);
        //$iframes = $doc->getElementsByTagName('iframe');
        //print_r($iframes);

        //$iframe = $dom->getElementsByTagName('iframe')->item(0);
        //echo $iframe->attributes->getNamedItem("src")->value;
        //print_r($iframe);

        foreach($dom->getElementsByTagName('*') as $element ){
            echo $element->tagName."<br><br>";
        }
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
