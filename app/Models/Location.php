<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {
    protected $connection = "mysql2";
    protected $table = "locations";

    public function listings() {
        return $this->belongsToMany('App\Models\Listing', 'listing_location', 
          'location_id', 'listing_id');
    }
}
