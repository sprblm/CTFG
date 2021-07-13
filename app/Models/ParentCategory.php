<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParentCategory extends Model {
    protected $table = "parent_categories";

    protected $fillable = [
        'name', 'grant_parent_category_id',
    ];

    public function categories(){
        return $this->hasMany('App\Models\Category');
    }
}
