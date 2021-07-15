<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AncestorCategory extends Model {
    protected $table = "ancestor_categories";

    protected $fillable = [
        'name', 'airtable_id', 'slug',
    ];

    public function grandParentCategories(){
        return $this->hasMany('App\Models\GrandParentCategory');
    }
}
