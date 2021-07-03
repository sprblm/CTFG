<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funding extends Model {
    protected $connection = "mysql2";
    protected $table = "funding";

    public function listings() {
        return $this->belongsToMany('App\Models\Funding', 'listing_funding', 
          'funding_id', 'listing_id');
    }
}
