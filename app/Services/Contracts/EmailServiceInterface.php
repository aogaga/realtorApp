<?php


namespace App\Services\Contracts;


use App\Models\Contact;

interface EmailServiceInterface
{
    public function sendMails(array $contact);
}
