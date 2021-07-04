<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funding extends Model {
    protected $table = "funding";

    public function listings() {
        return $this->belongsToMany('App\Models\Listing', 'listing_funding', 
          'funding_id', 'listing_id');
    }
}
