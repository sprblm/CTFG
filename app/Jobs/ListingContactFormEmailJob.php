<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use Mail;
use App\Mail\ListingContactFormEmail;

class ListingContactFormEmailJob implements ShouldQueue {
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $email;
    protected $body;
    protected $recipient;
    protected $link;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($recipient, $email, $body, $link) {
        $this->recipient = $recipient;
        $this->email = $email;
        $this->body = $body;
        $this->link = $link;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle() {
        Mail::to($this->recipient)->queue(new ListingContactFormEmail($this->email, $this->body, $this->link));
    }
}
