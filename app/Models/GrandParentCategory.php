<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GrandParentCategory extends Model {
    protected $table = "grand_parent_categories";

    protected $fillable = [
        'name', 'ancestor_category_id', 'airtable_id', 'slug',
    ];

    public function parentCategories(){
        return $this->hasMany('App\Models\ParentCategory');
    }

    public function ancestorCategory() {
        return $this->belongsTo('App\Models\AncestorCategory', 'ancestor_category_id' , 'id');
    }
}
