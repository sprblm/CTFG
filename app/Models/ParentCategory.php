<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParentCategory extends Model {
    protected $table = "parent_categories";

    protected $fillable = [
        'name', 'grand_parent_category_id', 'airtable_id', 'slug',
    ];

    public function categories(){
        return $this->hasMany('App\Models\Category');
    }

    public function grandParent() {
        return $this->belongsTo('App\Models\GrandParentCategory', 'grand_parent_category_id', 'id');
    }
}
