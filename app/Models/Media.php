<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model {
    protected $connection = "mysql2";
    protected $table = "media";

    public function listings() {
        return $this->belongsToMany('App\Models\Listing', 'listing_media', 
          'media_id', 'listing_id');
    }
}
