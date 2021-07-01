<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model {
    protected $table = "listings";

    public function category() {
        return $this->belongsTo('App\Models\Category', 'categories', 'listings');
    }

    public function images() {
        $fkey = '{'.$this->id.'}';
        return $this->hasMany('App\Models\Media', $fkey);
    }
}
