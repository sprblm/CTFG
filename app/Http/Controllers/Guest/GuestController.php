<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Listing;
use App\Models\Category;

class GuestController extends Controller {
    // Welcome page
    public function index() {
        $projects = Listing::simplePaginate(10);

        return view ('welcome', [
            'title' => 'CivicTech.Guide',
            'projects' => $projects,
        ]);

    }
}
