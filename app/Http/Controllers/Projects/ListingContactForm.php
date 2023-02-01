<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\ListingContactFormRequest;

use App\Jobs\ListingContactFormEmailJob;

class ListingContactForm extends Controller {
    /**
     * Process contact form
     * 
     * @param Illuminat
     * 
     * @return mixed
     * 
     */
    public function processForm(ListingContactFormRequest $request) {
        $validated = array_merge(
            $request->all(), [
                'recipient' => $request->input('recipient'),
                'slug' => $request->input('slug'),
            ]
        );

        try {
            $link = 'https://directory.civictech.guide/listing/'.$validated['slug'];
            // Sent email
            ListingContactFormEmailJob::dispatch($validated['recipient'], $validated['email'], $validated['message'], $link);

            return redirect()->back()->with('success', 'Email sent! Thank you for reaching out.');

        } catch (Exception $e) {
            return redirect()->back()->with('errors', $e->getMessage());
        }
    } 
}
