<?php

namespace App\Http\Controllers\Airtable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Airtable;

use App\Models\Category;
use App\Models\Media;
use App\Models\Location;
use App\Models\Tag;
use App\Models\Funding;
use App\Models\Impact;
use App\Models\People;
use App\Models\Listing;
use App\Models\Project;

class ImportsController extends Controller {
    public function test() {
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

        $projects = Project::whereNotNull('cats')->get();

        foreach ($projects as $project) {
            $categories = Category::whereIn('airtable_id', $project->cats)->get();
            $listing = Listing::where('airtable_id', $project->airtable_id)->first();
            foreach ($categories as $cat) {
                //$listing->categories()->attach($cat->id);
            }
        }

        //$listings = Airtable::table('listings')->where('id', '>=', 500)->where('id', '<', 1000)->all();
        //$listings = Airtable::table('listings')->all();
        
        //$listings = Airtable::table('listings')->select(['Project name', 'Tags', 'Categories', 'Founder(s)', 'Location', 'Images', 'Funding', 'Impact', 'Links', 'Host organization'])->all();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        //print_r($listings);

       
        /* foreach ($listings as $cat) {
            echo "ID: ".@$cat["id"]."<br>";
            echo "name: ".@$cat["fields"]["Project name"]."<br>";
            echo "introduction: ".strip_tags(@$cat["fields"]["1-liner"])."<br>";
            echo "type: ".@$cat["fields"]["Type"]."<br>";
            echo "organization_type: ".@$cat["fields"]["Organization type"][0]."<br>";
            echo "description: ".strip_tags(@$cat["fields"]["Longer description"])."<br>";
            echo "status: ".@$cat["fields"]["Status"]."<br>";
            echo "latitude: ".@$cat["fields"]["Latitude"]."<br>";
            echo "longitude: ".@$cat["fields"]["Longitude"]."<br>";
            echo "website_url: ".@$cat["fields"]["Website URL"]."<br>";
            echo "twitter_url: ".@$cat["fields"]["Twitter URL"]."<br>";
            echo "instagram_url: ".@$cat["fields"]["Instagram URL"]."<br>";
            echo "facebook_url: ".@$cat["fields"]["Facebook URL"]."<br>";
            echo "linkedin_url: ".@$cat["fields"]["LinkedIn URL"]."<br>";
            echo "youtube_channel: ".@$cat["fields"]["YouTube Channel"]."<br>";
            echo "contact_page_url: ".@$cat["fields"]["Contact page URL"]."<br>";
            echo "github_url: ".@$cat["fields"]["Github URL"]."<br>";
            echo "email: ".@$cat["fields"]["Email"]."<br>";
            echo "events_page_url: ".@$cat["fields"]["Events page URL"]."<br>";
            echo "jobs_page_url: ".@$cat["fields"]["Jobs page URL"]."<br>";
            echo "blog_url: ".@$cat["fields"]["Blog feed URL"]."<br>";
            echo "built_with: ".@$cat["fields"]["Builtwith.com"]."<br>";
            echo "claimed_status: ".@$cat["fields"]["Claimed status"]."<br>";
            echo "founded: ".@$cat["fields"]["Founded"]."<br>";
            echo "closed: ".@$cat["fields"]["Closed"]."<br>";
            echo "shutdown_reason: ".@$cat["fields"]["If shut down, what happened?"]."<br>";
            echo "postmortem: ".@$cat["fields"]["Postmortem"]."<br>";
            echo "host_organization: ".@$cat["fields"]["Host organization"][0]."<br>";
            echo "host_organization_url: ".@$cat["fields"]["Host organization URL"]."<br>";
            echo "language: ".@$cat["fields"]["Language(s)"][0]."<br>";
            echo "open_source: ".@$cat["fields"]["Open source"]."<br>";
            echo "open_source_license: ".@$cat["fields"]["Open source license"]."<br>";
            //echo "longitude: ".@$cat["fields"]["Longitude"]."<br>";
            echo "<br>";
        } */

        /*foreach ($listings as $cat) {
            $listing = new Project;
            
            $listing->airtable_id = @$cat["id"];
            $listing->name = @$cat["fields"]["Project name"];
            $listing->cats = @$cat["fields"]["Categories"];
            $listing->tags = @$cat["fields"]["Tags"];
            $listing->images = @$cat["fields"]["Images"];
            $listing->location = @$cat["fields"]["Location"];
            $listing->links = @$cat["fields"]["Links"];
            $listing->host_org = @$cat["fields"]["Host organization"];
            $listing->founders = @$cat["fields"]["Founder(s)"];
            $listing->impact = @$cat["fields"]["Impact"];
            $listing->funding = @$cat["fields"]["Funding"]; */

            /*$listing->introduction = strip_tags(@$cat["fields"]["1-liner"]);
            $listing->type = @$cat["fields"]["Type"];
            $listing->organization_type = @$cat["fields"]["Organization type"][0];
            $listing->description = strip_tags(@$cat["fields"]["Longer description"]);
            $listing->status = @$cat["fields"]["Status"];
            $listing->latitude = @$cat["fields"]["Latitude"];
            $listing->longitude = @$cat["fields"]["Longitude"];
            $listing->website_url = @$cat["fields"]["Website URL"];
            $listing->twitter_url = @$cat["fields"]["Twitter URL"];
            $listing->instagram_url = @$cat["fields"]["Instagram URL"];
            $listing->facebook_url = @$cat["fields"]["Facebook URL"];
            $listing->linkedin_url = @$cat["fields"]["LinkedIn URL"];
            $listing->youtube_channel = @$cat["fields"]["YouTube Channel"];
            $listing->contact_page_url = @$cat["fields"]["Contact page URL"];
            $listing->github_url = @$cat["fields"]["Github URL"];
            $listing->email = @$cat["fields"]["Email"];
            $listing->events_page_url = @$cat["fields"]["Events page URL"];
            $listing->jobs_page_url = @$cat["fields"]["Jobs page URL"];
            $listing->blog_url = @$cat["fields"]["Blog feed URL"];
            $listing->built_with = @$cat["fields"]["Builtwith.com"];
            $listing->claimed_status = @$cat["fields"]["Claimed status"];
            $listing->founded = @$cat["fields"]["Founded"];
            $listing->closed = @$cat["fields"]["Closed"];
            $listing->shutdown_reason = @$cat["fields"]["If shut down, what happened?"];
            $listing->postmortem = @$cat["fields"]["Postmortem"];
            $listing->host_organization = @$cat["fields"]["Host organization"][0];
            $listing->host_organization_url = @$cat["fields"]["Host organization URL"];
            $listing->language = @$cat["fields"]["Language(s)"][0];
            $listing->secondary_language = @$cat["fields"]["Language(s)"][1];
            $listing->open_source = @$cat["fields"]["Open source"];
            $listing->open_source_license = @$cat["fields"]["Open source license"];*/


            /*@$listing->save();
        }*/

        //echo "Done";
    }
}
