<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    protected $table = "categories";

    protected $fillable = [
        'hits',
    ];

    public function listings() {
        return $this->belongsToMany('App\Models\Listing', 'listing_categories', 
          'category_id', 'listing_id');
    }

    public function parentCategory() {
        return $this->belongsTo('App\Models\ParentCategory');
    }

}
