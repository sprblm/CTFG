<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SearchLog extends Model {
    protected $table = "search_log";

    protected $fillable = [
        'item', 'search_count', 'total_results_count', 'last_search_results_count'
    ];
}
