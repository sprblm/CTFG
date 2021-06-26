<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestController extends Controller {
    // Welcome page
    public function index() {
        return view ('welcome');
    }
}
