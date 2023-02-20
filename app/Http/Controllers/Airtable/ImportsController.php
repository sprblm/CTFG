<?php

namespace App\Http\Controllers\Airtable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Airtable;
use DB;

use App\Models\Category;
use App\Models\Media;
use App\Models\Location;
use App\Models\Tag;
use App\Models\Link;
use App\Models\Funding;
use App\Models\Impact;
use App\Models\People;
use App\Models\Listing;
use App\Models\Project;
use App\Models\Knowledge;
use App\Models\ListingCategory;

use League\HTMLToMarkdown\HtmlConverter;
use Illuminate\Support\Str;

class ImportsController extends Controller {
    public function manualSync() {
        try {
            app(\App\Http\Controllers\Airtable\Sync\CategoryController::class)->syncCategories();

            app(\App\Http\Controllers\Airtable\Sync\FundingController::class)->syncFunding();

            app(\App\Http\Controllers\Airtable\Sync\ImpactController::class)->syncImpact();

            app(\App\Http\Controllers\Airtable\Sync\KnowledgeController::class)->syncKnowledge();

            app(\App\Http\Controllers\Airtable\Sync\BoundaryController::class)->syncBoundary();

            app(\App\Http\Controllers\Airtable\Sync\LocationController::class)->syncLocation();

            app(\App\Http\Controllers\Airtable\Sync\MediaController::class)->syncMedia();

            app(\App\Http\Controllers\Airtable\Sync\PeopleController::class)->syncPeople();

            app(\App\Http\Controllers\Airtable\Sync\TagController::class)->syncTag();

            app(\App\Http\Controllers\Airtable\Sync\LinkController::class)->syncLinks();

            app(\App\Http\Controllers\Airtable\Sync\ListingController::class)->syncListing();

        } catch (\Throwable $th) {
            \Log::error('Error from Airtable auto sync cronjob: ' . $th->getMessage());
        }
    }

    public function test() {
        /*$tags = Airtable::table('tags')->all();

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

        } */



        $listings = Airtable::table('listings')->get();

        foreach($listings as $list) {
            echo "HQ Airtable ID: ".@$list["fields"]["Headquarters Location"][0]."<br>";
            $location = Location::where('airtable_id', @$list["fields"]["Headquarters Location"][0])->first();
            if ($location) {
                echo "HQ Name: ".$location->name."<br>";
            }
            echo "<br>";
        }

        /*echo sizeof($listings[0]["fields"]["Categories"]);
        print_r($listings[0]);
        echo "<br><br>";

        echo sizeof($listings[1]["fields"]["Categories"]);
        print_r($listings[1]);
        echo "<br><br>";

        echo sizeof($listings[2]["fields"]["Categories"]);
        print_r($listings[2]);
        echo "<br><br>"; */

        /*$cats = Airtable::table('categories')->all();
        
        foreach ($cats as $cat) {
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
        } */

        /*$cats = Airtable::table('categories')->all();
        foreach ($cats as $cat) {
            $c = new Category;
            $c->airtable_id = @$cat["id"];
            $c->name = @$cat["fields"]["Name"];
            $c->description = strip_tags(@$cat["fields"]["Description"]);
            $c->slug = Str::of(@$cat["fields"]["Name"])->slug();
            $c->save();
        } */

        //print_r($listings);
        /*foreach ($listings as $list) {
            print_r($list);
            echo "<br>";


            $airtableID = $list["id"];

            $entry = Listing::where('airtable_id', $airtableID)->first();
            if ($entry) {
                $entry->update([
                    'project_stage' => @$list["fields"]["Project stage"],
                    'features' => @$list["fields"]["Features"][0],
                    'used_by' => @$list["fields"]["Who's it used by?"],
                    'no_of_employees' => @$list["fields"]["Number of employees"],
                    'pricing_information' => @$list["fields"]["Pricing information"],
                    'wikidata_api_field' => @$list["fields"]["Wikidata API Field"],
                    'last_modified' => @$list["fields"]["Last Modified"],
                    'created' => @$list["fields"]["Created"],
                    'slack_url' => @$list["fields"]["Slack URL"],
                    'crunchbase_url' => @$list["fields"]["Crunchbase URL"],
                    'wikimedia_url' => @$list["fields"]["Wikimedia URL"],
                    'tiktok_url' => @$list["fields"]["TikTok URL"],
                ]);
            } 
            
        } */

        /*$listings = Listing::whereNotNull('name')->get();

        foreach ($listings as $list) {
            $list->update([
                'slug' => Str::of($list->name)->slug(),
            ]);
        } */
    }


    /*public function testa() {
        $lists = Listing::where('id', '>', 5152)->where('id', '<=', 5500)->get();

        $count = 0;
        foreach ($lists as $list) {
            try {
                if(($list->airtable_id != "recq73fNADlx8IoSs") && ($list->airtable_id != "recpCX0KplcHOLquG")){
                    Airtable::table('listings')->patch($list->airtable_id, ['Longer description' => $list->markdown_description]);
                }

                $count += 1;
                if ($count >= 5) {
                    sleep(2);
                    $count = 0;
                }
            } catch (Exception $e) {
               
            }
            
        }
    }*/
        



        //$listings = Listing::limit(3)->get();
        //echo "Airtable ID: ".$project->airtable_id."<br>";
        //echo "Name: ".$project->name."<br>";

        //$categories = Category::whereIn('airtable_id', $project->cats)->get();

        /*foreach ($listings as $c) {
            echo "<h2>Project</h2>";
            echo "Project Name: ".$c->name."<br>";
            echo "Airtable ID: ".$c->airtable_id."<br>";
            echo "<br>";
            echo "<h4>Categories</h4>";
            foreach ($c->categories as $cat) {
                echo "Name: ".$cat->name."<br>";
                echo "<br>";
            }
            echo "<br>";
        } */

        /*$projects = Project::whereNotNull('host_org')->get();

        foreach ($projects as $project) {
            $knowledge = Knowledge::whereIn('airtable_id', $project->host_org)->first();
            $listing = Listing::where('airtable_id', $project->airtable_id)->first();
            $listing->update([
                'host_org_id' => $knowledge->id,
                'host_organization' => $knowledge->name,
            ]);
        } */

        //$listings = Airtable::table('listings')->where('id', '>=', 500)->where('id', '<', 1000)->all();
        //$knowledge = Airtable::table('knowledge')->all();
        
        //$listings = Airtable::table('listings')->select(['Project name', 'Tags', 'Categories', 'Founder(s)', 'Location', 'Images', 'Funding', 'Impact', 'Links', 'Host organization'])->all();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        //print_r($knowledge);

       
        /*foreach ($knowledge as $cat) {
            echo "ID: ".@$cat["id"]."<br>";
            echo "name: ".@$cat["fields"]["Name"]."<br>";
            echo "description: ".strip_tags(@$cat["fields"]["Description"])."<br>";
            echo "url: ".@$cat["fields"]["URL"]."<br>";
            echo "tag: ".@$cat["fields"]["Tags"][0]."<br>";
            echo "twitter: ".@$cat["fields"]["Twitter"][0]."<br>";
            echo "facebook: ".@$cat["fields"]["Facebook"][0]."<br>";
            echo "rss: ".@$cat["fields"]["RSS"][0]."<br>";
            echo "github: ".@$cat["fields"]["Github"][0]."<br>";
            echo "email: ".@$cat["fields"]["Email"]."<br>";
            echo "phone: ".@$cat["fields"]["Phone"]."<br>";
            
            echo "<br>";
        } */

        /* foreach ($knowledge as $cat) {
            $kdg = new Knowledge;
            
            $kdg->airtable_id = @$cat["id"];
            $kdg->name = @$cat["fields"]["Name"];
            $kdg->description = strip_tags(@$cat["fields"]["Description"]);
            $kdg->url = @$cat["fields"]["URL"];
            $kdg->tag = @$cat["fields"]["Tags"][0];
            $kdg->twitter = @$cat["fields"]["Twitter"][0];
            $kdg->facebook = @$cat["fields"]["Facebook"][0];
            $kdg->rss = @$cat["fields"]["RSS"][0];
            $kdg->github = @$cat["fields"]["Github"][0];
            $kdg->email = @$cat["fields"]["Email"];
            $kdg->phone = @$cat["fields"]["Phone"];


            @$kdg->save();
        } */

        //echo "Done";



    
}
