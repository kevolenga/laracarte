<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Utilities\Recaptcha;
use Illuminate\Http\Request;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function create(){
        return view('contacts.create');
    }

    public function store(ContactRequest $req){

        $captcha = new Recaptcha(env('RECAPTCHA_SECRET_KEY'));
        
        if ($captcha->verify($req['g-recaptcha-response'])) {
            
            $message = Message::create($req->only('name', 'email', 'message'));

            $mailable = new ContactMessageCreated($message);
            $admin_email = config('admin.email');
            
            Mail::to($admin_email)->send($mailable);
            
            $this->flash('Your mail has been sent successfully');
            return redirect()->route('home');
        
        } else {
            $this->flash('Something went wrong !! Our engineers are working on the issue','danger');
            return redirect()->route('home');
        }
        

        
    }
}
