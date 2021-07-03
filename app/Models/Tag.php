<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {
    protected $connection = "mysql2";
    protected $table = "tags";

    public function listings() {
        return $this->belongsToMany('App\Models\Listing', 'listing_tags', 
          'tag_id', 'listing_id');
    }
}
