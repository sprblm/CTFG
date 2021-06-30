<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    protected $table = "listing_categories";

    public function listings() {
        return $this->hasMany('App\Models\Listing', 'listings', 'categories');
    }
}
