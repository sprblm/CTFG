<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    protected $connection = "mysql2";
    protected $table = "categories";

    public function listings() {
        return $this->belongsToMany('App\Models\Listing', 'listing_categories', 
          'category_id', 'listing_id');
    }
}
