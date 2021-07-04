<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {
    protected $table = "projects";

    protected $casts = [
        'cats' => 'array',
        'tags' => 'array',
        'images' => 'array',
        'location' => 'array',
        'links' => 'array',
        'host_org' => 'array',
        'founders' => 'array',
        'impact' => 'array',
        'funding' => 'array',
    ];
}
