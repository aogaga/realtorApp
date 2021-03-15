<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewContact extends Mailable
{
    use Queueable, SerializesModels;

    public  $contact;
    public $id;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $contact)
    {
        $this->contact = $contact;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("New contact information recieved")->view('mail.newContact');
    }
}
