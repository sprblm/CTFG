<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParentCategory extends Model {
    protected $table = "parent_categories";

    protected $fillable = [
        'name',
    ];

    public function categories(){
        return $this->hasMany('App\Models\Category');
    }
}
