<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Boundary extends Model {
    protected $table = "boundaries";

    protected $fillable = [
        'airtable_id', 'name', 'iso2', 'iso3', 'iso_numeric', 'type',
    ];
}
