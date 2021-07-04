<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Impact extends Model {
    protected $table = "impact";

    public function listings() {
        return $this->belongsToMany('App\Models\Listing', 'listing_impact', 
          'impact_id', 'listing_id');
    }
}
