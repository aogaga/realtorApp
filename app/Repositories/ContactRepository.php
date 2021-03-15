<?php


namespace App\Repositories;


use App\Models\Contact;
use App\Repositories\Contracts\ContactRepositoryInterface;
use App\Services\Contracts\ContactServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ContactRepository implements  ContactRepositoryInterface
{


    public function add(array $data)
    {
        $id = (string) Str::uuid();;
        $contact = new Contact();
        $contact->id = $id;
        $contact->fname  = $data['fname'];
        $contact->lname = $data['lname'];
        $contact->email = $data['email'];
        $contact->phone  = $data['phone'];
        $contact->streetAddress = $data['streetAddress'];
        $contact->zip = $data['zip'];
        $contact->city = $data['city'];
        $contact->state = $data['state'];
        $contact->hearaboutUs = $data['hearaboutUs'];
        $contact->budget = $data['budget'];

        try{
            $result = $contact->save();
            return ['status'=>$result, 'fname' =>$data['fname'], 'lname'=>$data['lname'], 'email' => $data['email'], 'id'=>$id];
        }catch (\Exception $e){
            return ['status'=>false, 'message' => $e->getMessage()];
       }

    }

    public function get($id)
    {
        return Contact::find($id);
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }


    public function all()
    {
        return Contact::all();
    }
}
