<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model {
    protected $table = "media";

    public function listing() {
        return $this->belongsTo('App\Models\Listing', 'listings');
    }
}
