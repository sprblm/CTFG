<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListingContactFormRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'email' => 'required|email|max: 255',
            'message' => 'required',
            'g-recaptcha-response' => 'required|recaptcha'
        ];
    }

    public function messages() {
        return [
           'required' => 'The :attribute field is required.',
           'email' => 'The :attribute must use a valid email address',
           'g-recaptcha-response.recaptcha' => 'Captcha verification failed',
           'g-recaptcha-response.required' => 'Please complete the captcha'
       ];
    }
}
