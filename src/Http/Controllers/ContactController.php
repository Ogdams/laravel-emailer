<?php

namespace Ogdams\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ogdams\Contact\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Ogdams\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }
    public function send(Request $request)
    {
       $saveRequest = new Contact;

       $saveRequest->email = $request->email;
       $saveRequest->name = $request->name;
       $saveRequest->message = $request->message;



         if($saveRequest->save()){
            Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->email, $request->name));
             return redirect(route('contact.index'));
         }


    }
}
