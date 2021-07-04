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
use App\Models\Knowledge;

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
}
