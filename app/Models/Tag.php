<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {
    protected $table = "tags";

    protected $fillable = [
        'airtable_id', 'name', 'parent_id',
    ];

    public function listings() {
        return $this->belongsToMany('App\Models\Listing', 'listing_tags', 
          'tag_id', 'listing_id');
    }

    // Recursive
    public function items() {
        return $this->hasMany(Tag::class, 'parent_id');
    }

    public function childItems() {
        return $this->hasMany(Tag::class, 'parent_id')->with('items');
    } 
}
