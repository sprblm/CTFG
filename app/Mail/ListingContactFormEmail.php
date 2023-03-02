<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ListingContactFormEmail extends Mailable {
    use Queueable, SerializesModels;

    public $email;
    public $body;
    public $link;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $body, $link) {
        $this->email = $email;
        $this->body = $body;
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
            'body' => $this->body,
            'link' => $this->link,
        ]);
    }
}
