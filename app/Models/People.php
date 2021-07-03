<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class People extends Model {
    protected $connection = "mysql2";
    protected $table = "people";

    public function listings() {
        return $this->belongsToMany('App\Models\Listing', 'listing_founders', 
          'people_id', 'listing_id');
    }
}
