<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    protected $table = "categories";

    protected $fillable = [
        'hits', 'parent_category_id', 'slug', 'name', 'parent_id', 'order_sort',
    ];

    public function listings() {
        return $this->belongsToMany('App\Models\Listing', 'listing_categories',
          'category_id', 'listing_id');
    }

    public function parentCategory() {
        return $this->belongsTo('App\Models\ParentCategory');
    }

    // Recursive
    public function items() {
        return $this->hasMany(Category::class, 'parent_id')->orderBy('order_sort');
    }

    public function childItems() {
        return $this->hasMany(Category::class, 'parent_id')->with('items')->orderBy('order_sort');
    } 

    public function children() {
        return $this->hasMany(Category::class, 'parent_id', 'id')->orderBy('order_sort');
    }

    public function parent() {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }

}
