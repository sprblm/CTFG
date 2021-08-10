<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    protected $table = "categories";

    protected $fillable = [
        'hits', 'parent_category_id', 'slug', 'name', 'parent_id',
    ];

    public function listings() {
        return $this->belongsToMany('App\Models\Listing', 'listing_categories',
          'category_id', 'listing_id');
    }

    public function parentCategory() {
        return $this->belongsTo('App\Models\ParentCategory');
    }

    public function items()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function childItems()
    {
        return $this->hasMany(Category::class, 'parent_id')->with('items');
    } 

}
