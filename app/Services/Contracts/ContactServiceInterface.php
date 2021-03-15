<?php


namespace App\Services\Contracts;


use App\Models\Contact;
use Illuminate\Http\Request;

interface ContactServiceInterface
{
    public function processContactSubmission(array $data);
    public function getContact($id);
    public function getAllContact();
    function validateContactForm(Request $request);
}
