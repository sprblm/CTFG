<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model {
    protected $table = "links";

    protected $fillable = [
        'airtable_id', 'notes', 'type', 'link', 'airtable_created_at',
    ];

    protected $casts = [
        'airtable_created_at' => 'datetime',
    ];

    public function listings() {
        return $this->belongsToMany('App\Models\Listing', 'listing_links', 
          'link_id', 'listing_id');
    }
}
