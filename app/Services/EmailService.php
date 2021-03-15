<?php


namespace App\Services;


use App\Jobs\ContactWelcomeJob;
use App\Jobs\NewContactJob;
use App\Mail\ContactWelcome;
use App\Mail\NewContact;
use App\Models\Contact;
use App\Services\Contracts\EmailServiceInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class EmailService implements EmailServiceInterface
{

    private function welcomeContact(array $contact)
    {
        $job = (new ContactWelcomeJob($contact))->delay(Carbon::now()->addSecond(5));
        dispatch($job);
    }

    private function newContactNotification(array $contact)
    {
        $job = (new NewContactJob($contact))->delay(Carbon::now()->addSecond(5));
        dispatch($job);
    }

    public function sendMails(array $data)
    {
        $this->newContactNotification($data);
        $this->welcomeContact($data);

    }
}
