<?php

namespace App\Http\Controllers;

use App\Services\Contracts\ContactServiceInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AppController extends Controller
{
    private $contactService;
    public function __construct(Request $request, ContactServiceInterface $contactService)
    {
        $this->contactService = $contactService;

    }

    public function create(){
            return view('app.create');
    }

    public function store(Request $request){

        $validator = $this->contactService->validateContactForm($request);

        if($validator->fails()){
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }

       $result =  $this->contactService->processContactSubmission($request->all());

        if($result){

            flash('Thanks for contacting us');

        }else{
            flash('Sorry! Please try again.')->error();
        }

        return view('app.create');
    }

    public function show(Request $request, $id){

        $data = $this->contactService->getContact($id);
        return view('app.show', ['contact'=> $data]);

    }

    public function showAll(){
        $contacts = $this->contactService->getAllContact();
        return view('app.showAll', ['contacts'=>$contacts]);
    }


}
