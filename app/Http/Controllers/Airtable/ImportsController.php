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

    }
    
}
