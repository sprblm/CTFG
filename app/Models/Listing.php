<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Listing extends Model {
    protected $table = "listings";

    protected $fillable = [
        'parent_id', 'host_org_id', 'host_organization', 'slug', 'name', 'raw_description', 'markdown_description', 'is_twitter_feed', 'is_youtube_channel', 'is_slideshare_embed', 'project_stage', 'features', 'used_by', 'no_of_employees', 'pricing_information', 'wikidata_api_field', 'last_modified', 'created', 'slack_url', 'crunchbase_url', 'wikimedia_url', 'tiktok_url', 'has_iframe_embed', 'has_twitter_feed', 'first_location', 'first_country', 'cover_image', 'introduction', 'type', 'github_url', 
    ];

    protected $casts = [
        'created' => 'date',
        'last_modified' => 'date'
    ];

    public function hostOrg() {
        return $this->belongsTo('App\Models\Knowledge', 'host_org_id');
    }

    public function categories() {
        return $this->belongsToMany('App\Models\Category', 'listing_categories', 
          'listing_id', 'category_id');
    }

    public function categoriesOrdered() {
        return $this->belongsToMany('App\Models\Category', 'listing_categories', 
          'listing_id', 'category_id')->orderBy('hits', 'DESC');
    }

    public function founders() {
        return $this->belongsToMany('App\Models\People', 'listing_founders', 
          'listing_id', 'people_id');
    }

    public function funding() {
        return $this->belongsToMany('App\Models\Funding', 'listing_funding', 
          'listing_id', 'funding_id');
    }

    public function impact() {
        return $this->belongsToMany('App\Models\Impact', 'listing_impact', 
          'listing_id', 'impact_id');
    }

    public function location() {
        return $this->belongsToMany('App\Models\Location', 'listing_location', 
          'listing_id', 'location_id');
    }

    public function media() {
        return $this->belongsToMany('App\Models\Media', 'listing_media', 
          'listing_id', 'media_id');
    }

    public function tags() {
        return $this->belongsToMany('App\Models\Tag', 'listing_tags', 
          'listing_id', 'tag_id');
    }

    public function links() {
        return $this->belongsToMany('App\Models\Link', 'listing_links', 
          'listing_id', 'link_id');
    }

    
    public function children() {
        return $this->hasMany(Listing::class, 'parent_id', 'id');
    }

    public function parent() {
        return $this->belongsTo(Listing::class, 'parent_id', 'id');
    }

    // Query scope
    /*public function scopeSearchQuery(Builder $builder, $q) {
        $escapedQuery = addslashes($q);
        return $builder
            ->select()
            ->where("name", "LIKE", "%{$escapedQuery}%")->orWhere("introduction", "LIKE", "%{$escapedQuery}%")->orWhere("description", "LIKE", "%{$escapedQuery}%")->orderByRaw("CASE
                    WHEN name = '{$escapedQuery}' THEN 1
                    WHEN name LIKE '{$escapedQuery}%' THEN 2
                    WHEN name LIKE '%{$escapedQuery}%' THEN 3
                    ELSE 4
                    END"
                );
    }*/

    public function scopeSearchQuery(Builder $builder, $q) {
        $escapedQuery = addslashes($q);
        return $builder
            ->select()
            ->where("name", "LIKE", "%{$escapedQuery}%")
            ->orWhere("introduction", "LIKE", "%{$escapedQuery}%")
            ->orWhere("description", "LIKE", "%{$escapedQuery}%")
            ->orWhereHas("categories", function($builder) use ($escapedQuery) {
                $builder->where("name", "=", $escapedQuery);
            })
            ->orderByRaw("CASE
                WHEN name = '{$escapedQuery}' THEN 1
                WHEN name LIKE '{$escapedQuery}%' THEN 2
                WHEN name LIKE '%{$escapedQuery}%' THEN 3
                ELSE 4
                END"
            );
    }
}
