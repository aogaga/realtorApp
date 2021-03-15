<?php


namespace App\Services;


use App\Models\Contact;
use App\Repositories\Contracts\ContactRepositoryInterface;
use App\Services\Contracts\ContactServiceInterface;
use App\Services\Contracts\EmailServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactService implements ContactServiceInterface
{
    private $contactRepository;
    private $emailService;
    public function __construct(ContactRepositoryInterface $contactRepository, EmailServiceInterface $emailService)
    {
        $this->contactRepository = $contactRepository;
        $this->emailService = $emailService;
    }

    public function processContactSubmission(array $data)
    {
        $result = $this->contactRepository->add($data);

        if($result['status']){
            $this->emailService->sendMails($result);
        }

        return $result['status'];
    }

    public function getContact($id)
    {
        return $this->contactRepository->get($id);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validateContactForm(Request $request)
    {
        $validator = Validator::make( $request->all(),[
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'hearaboutUs' => 'required',
            'budget' => 'required',
//            'g-recaptcha-response' => 'required|captcha'

        ], [
            'fname.required' => 'First Name is required!',
            'lname.required' => 'Last Name is required!',
            'email.required' => 'We need your email, promise we wont spam you',
            'phone.requred' => 'Did you forget your phone number ?',
            'hearaboutUs.required' => 'Hod did you hear about us ?',
            'budget.required' => 'how much are you willing to spend'
        ]);

        return $validator;
    }

    public function getAllContact()
    {
        return $this->contactRepository->all();
    }
}
