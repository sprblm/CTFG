<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model {
    protected $connection = "mysql2";
    protected $table = "listings";

    public function categories() {
        return $this->belongsToMany('App\Models\Category', 'listing_categories', 
          'listing_id', 'category_id');
    }

    public function founders() {
        return $this->belongsToMany('App\Models\People', 'listing_founders', 
          'listing_id', 'people_id');
    }

    public function funding() {
        return $this->belongsToMany('App\Models\Funding', 'listing_founding', 
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
}
