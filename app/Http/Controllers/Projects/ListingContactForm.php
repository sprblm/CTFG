<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\ListingContactFormRequest;

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
                'date' => date('Y-m-d'),
            ]
        );

        try {
            // Sent email

            return redirect()->back()->with('success', 'Email sent! Thank you for reaching out.');

        } catch (Exception $e) {
            return redirect()->back()->with('errors', $e->getMessage());
        }
    } 
}
