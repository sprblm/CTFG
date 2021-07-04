<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model {
    protected $table = "knowledge";

    public function listings() {
        return $this->hasMany('App\Models\Listing', 'knowledge_id');
    }
}
