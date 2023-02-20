<?php

namespace App\Jobs\Airtable;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use League\HTMLToMarkdown\HtmlConverter;
use Illuminate\Support\Str;

use App\Models\Listing;

class UpdateListing implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $request;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($request) {
        $this->request = $request;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle() {
        $listing = Listing::where('airtable_id', $this->request['id'])->first();

        if ($listing) {
            $listing->update([
                'host_org_id' => $this->request['hostOrgId'],
                'name' => $this->request['name'],
                'slug' => Str::of($this->request['name'])->slug();

                'introduction' => $this->request['introduction'],
                'type' => $this->request['type'],
                'organization_type' => $this->request['orgType'],
                'description' => $this->request['description'],
                'markdown_description' => $this->request['markdownDesc'],
                'raw_description' => $this->request['rawDesc'],
                'status' => $this->request['status'],
                'wikidata_api_field' => $this->request['wikidataApiField'],
                'pricing_information' => $this->request['pricingInfo'],
                'no_of_employees' => $this->request['employees'],
                'used_by' => $this->request['usedBy'],
                'features' => $this->request['features'],
                'project_stage' => $this->request['projectStage'],

            ]);
        }
    }
}
