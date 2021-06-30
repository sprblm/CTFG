<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use App\Models\Category;

class GuestController extends Controller {
    // Welcome page
    public function index() {
        $projects = DB::table('listings')->paginate(10);

        return view ('welcome', [
            'title' => 'CTFG',
            'projects' => $projects,
        ]);

    }
}
