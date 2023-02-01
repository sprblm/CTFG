<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ListingContactFormEmail extends Mailable {
    use Queueable, SerializesModels;

    public $email;
    public $message;
    public $link;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $message, $link) {
        $this->email = $email;
        $this->message = $message;
        $this->link = $link;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->view('emails.listing-contact-form')->with([
            'email' => $this->email,
            'message' => $this->message,
            'link' => $this->link,
        ]);
    }
}
