<?php

namespace App\Http\Controllers\Api\Webhooks\Airtable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Jobs\Airtable\UpdateListing;

class ListingController extends Controller {
    public function handleUpdate(Request $request) {
        //UpdateListing::dispatch($request)->onQueue('ctfg-airtable');
        UpdateListing::dispatch($request->all());

        return response()->json([
            'message' => 'Received'
        ], 200);
    }
    
}
