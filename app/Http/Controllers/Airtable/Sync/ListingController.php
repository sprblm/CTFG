<?php

namespace App\Http\Controllers\Airtable\Sync;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Airtable;
use DB;
use Illuminate\Support\Str;
use DOMDocument;

use Carbon\Carbon;

use App\Models\Listing;
use App\Models\Category;
use App\Models\People;
use App\Models\Funding;
use App\Models\Impact;
use App\Models\Location;
use App\Models\Media;
use App\Models\Tag;

class ListingController extends Controller {
    public function syncListing () {
        \Log::info("Listings table sync started at ".date('Y-m-d H:i:s'));

        // Recreate listings
        $listings = Airtable::table('listings')->all();

        if (Listing::count() > 0) {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            Listing::truncate();
            DB::table('listing_categories')->truncate();
            DB::table('listing_founders')->truncate();
            DB::table('listing_funding')->truncate();
            DB::table('listing_impact')->truncate();
            DB::table('listing_location')->truncate();
            DB::table('listing_media')->truncate();
            DB::table('listing_tags')->truncate();
        }
        
        $start = Carbon::createFromFormat('Y-m-d H:s:i', date('Y-m-d H:i:s'));
        foreach ($listings as $l) {
            $list = new Listing;
            $list->airtable_id = @$l["id"];
            //$list->host_org_id = @$l["fields"]["Name"];
            $list->name = @$l["fields"]["Project name"];
            $list->slug = Str::of(@$l["fields"]["Project name"])->slug();
            $list->introduction = @$l["fields"]["1-liner"];
            $list->type = @$l["fields"]["Type"][0];

            $list->organization_type = @$l["fields"]["Organization type"][0];
            $list->description = @$l["fields"]["Longer description"];
            $list->markdown_description = @$l["fields"]["Longer description"];
            $list->raw_description = @$l["fields"]["deprecated Longer description html"];
            $list->status = @$l["fields"]["Status"];

            $list->wikidata_api_field = @$l["fields"]["Wikidata API Field"];
            $list->pricing_information = @$l["fields"]["Pricing information"];
            $list->no_of_employees = @$l["fields"]["Number of employees"][0];
            $list->used_by = @$l["fields"]["Who's it used by?"];
            $list->features = @$l["fields"]["Features"][0];

            $list->project_stage = @$l["fields"]["Project stage"];
            $list->latitude = @$l["fields"]["Latitude"];
            $list->longitude = @$l["fields"]["Longitude"];

            $list->website_url = @$l["fields"]["Website URL"];
            $list->twitter_url = @$l["fields"]["Twitter URL"];
            $list->facebook_url = @$l["fields"]["Facebook URL"];
            $list->instagram_url = @$l["fields"]["Instagram URL"];
            $list->youtube_channel = @$l["fields"]["YouTube URL"];

            $list->linkedin_url = @$l["fields"]["LinkedIn URL"];
            $list->contact_page_url = @$l["fields"]["Contact page URL"];
            $list->github_url = @$l["fields"]["Github URL"];
            $list->email = @$l["fields"]["Email"];
            $list->events_page_url = @$l["fields"]["Events page URL"];

            $list->jobs_page_url = @$l["fields"]["Jobs page URL"];
            $list->blog_url = @$l["fields"]["Blog feed URL"];
            $list->tiktok_url = @$l["fields"]["TikTok URL"];
            $list->wikimedia_url = @$l["fields"]["Wikimedia URL"];
            $list->crunchbase_url = @$l["fields"]["Crunchbase URL"];

            $list->slack_url = @$l["fields"]["Slack URL"];
            $list->built_with = @$l["fields"]["Builtwith.com"];
            $list->claimed_status = @$l["fields"]["Claimed status"];
            $list->founded = @$l["fields"]["Founded"];
            $list->closed = @$l["fields"]["Closed"];

            $list->shutdown_reason = @$l["fields"]["If shutdown,what happened?"];
            $list->postmortem = @$l["fields"]["Postmortem"];
            //$list->host_organization = @$l["fields"]["Name"];
            $list->host_organization_url = @$l["fields"]["Host organization URL"];
            $list->language = @$l["fields"]["Languages(s)"][0];

            $list->secondary_language = @$l["fields"]["Languages(s)"][1];
            $list->open_source = @$l["fields"]["Open source"];
            $list->open_source_license = @$l["fields"]["Open source license"];
            $list->created = @$l["fields"]["Created"];
            $list->last_modified = @$l["fields"]["Last Modified"];

            $list->save();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $dbListings = Listing::get();

        $count = $dbListings->count();
        $to = Carbon::createFromFormat('Y-m-d H:s:i', date('Y-m-d H:i:s'));
        \Log::info("Listings table sync finished at ".date('Y-m-d H:i:s')." - ".$to->diffInMinutes($start)." minutes ... ".$count." records synced.");

        $this->updateEmbeds($dbListings);
        $this->syncRelations($dbListings, $listings);
        $this->updateLocationFields($dbListings);
    }

    public function syncRelations($dbListings, $airtableListings) {
        $start = Carbon::createFromFormat('Y-m-d H:s:i', date('Y-m-d H:i:s'));

        foreach ($airtableListings as $artList) {   
            // listing_categories
            $dbList = Listing::where('airtable_id', $artList["id"])->first();

            if (!empty(@$artList["fields"]["Categories"]) && sizeof(@$artList["fields"]["Categories"]) > 0) {
                for ($i=0; $i < sizeof(@$artList["fields"]["Categories"]); $i++) { 
                    $dbCat = Category::where('airtable_id', @$artList["fields"]["Categories"][$i])->first();
                    if ($dbList && $dbCat) {
                        $dbList->categories()->attach($dbCat->id);
                    }
                }

            }

            // listing_tags
            if (!empty(@$artList["fields"]["Tags"]) && sizeof(@$artList["fields"]["Tags"]) > 0) {
                for ($i=0; $i < sizeof(@$artList["fields"]["Tags"]); $i++) { 
                    $dbTag = Tag::where('airtable_id', @$artList["fields"]["Tags"][$i])->first();
                    if ($dbList && $dbTag) {
                        $dbList->tags()->attach($dbTag->id);
                    }
                }

            }

            // listing_media
            if (!empty(@$artList["fields"]["Images"]) && sizeof(@$artList["fields"]["Images"]) > 0) {
                for ($i=0; $i < sizeof(@$artList["fields"]["Images"]); $i++) { 
                    $dbMedia = Media::where('airtable_id', @$artList["fields"]["Images"][$i])->first();
                    if ($dbList && $dbMedia) {
                        $dbList->media()->attach($dbMedia->id);
                    }
                }

            }

            // listing_location
            if (!empty(@$artList["fields"]["Location"]) && sizeof(@$artList["fields"]["Location"]) > 0) {
                for ($i=0; $i < sizeof(@$artList["fields"]["Location"]); $i++) { 
                    $dbLocation = Location::where('airtable_id', @$artList["fields"]["Location"][$i])->first();
                    if ($dbList && $dbLocation) {
                        $dbList->location()->attach($dbLocation->id);
                    }
                }

            }

            // listing_founders
            if (!empty(@$artList["fields"]["Founder(s)"]) && sizeof(@$artList["fields"]["Founder(s)"]) > 0) {
                for ($i=0; $i < sizeof(@$artList["fields"]["Founder(s)"]); $i++) { 
                    $dbFounder = People::where('airtable_id', @$artList["fields"]["Founder(s)"][$i])->first();
                    if ($dbList && $dbFounder) {
                        $dbList->founders()->attach($dbFounder->id);
                    }
                }

            }

            // listing_impact
            if (!empty(@$artList["fields"]["Impact"]) && sizeof(@$artList["fields"]["Impact"]) > 0) {
                for ($i=0; $i < sizeof(@$artList["fields"]["Impact"]); $i++) { 
                    $dbImpact = Impact::where('airtable_id', @$artList["fields"]["Impact"][$i])->first();
                    if ($dbList && $dbImpact) {
                        $dbList->impact()->attach($dbImpact->id);
                    }
                }

            }

            // listing_funding
            if (!empty(@$artList["fields"]["Funding"]) && sizeof(@$artList["fields"]["Funding"]) > 0) {
                for ($i=0; $i < sizeof(@$artList["fields"]["Funding"]); $i++) { 
                    $dbFunding = Funding::where('airtable_id', @$artList["fields"]["Funding"][$i])->first();
                    if ($dbList && $dbFunding) {
                        $dbList->funding()->attach($dbFunding->id);
                    }
                }

            }
        }

        $to = Carbon::createFromFormat('Y-m-d H:s:i', date('Y-m-d H:i:s'));
        \Log::info("Attaching relations sync finished at - ".date('Y-m-d H:i:s')." - ".$to->diffInMinutes($start)." minutes.");
    }

    public function updateEmbeds ($listings) {
        $start = Carbon::createFromFormat('Y-m-d H:s:i', date('Y-m-d H:i:s'));

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

        }
        $to = Carbon::createFromFormat('Y-m-d H:s:i', date('Y-m-d H:i:s'));
        \Log::info("Extracting youtube videos, twitter timeline and slideshare embeds finished at - ".date('Y-m-d H:i:s')." - ".$to->diffInMinutes($start)." minutes.");
    }

    public function updateLocationFields($listings){
        foreach ($listings as $list) {
            $list->update([
                'first_location' => @$list->location->first()->name,
                'first_country' => @$list->location->first()->country,
            ]);
        }
    }

    public function get_string_between($string, $start, $end){
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }

}
