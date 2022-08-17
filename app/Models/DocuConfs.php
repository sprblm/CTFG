<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocuConfs extends Model {
    protected $table = "docu_confs";

    protected $fillable = [
        'name', 'access', 'refresh'
    ];
}
