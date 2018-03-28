<?php

namespace App\Http\Controllers;

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
        $message = new ContactMessageCreated($req->name, $req->email, $req->message);
        Mail::to('admin@laracarte.com')->send($message);
        $this->flash('Your mail has been sent successfully');
        return redirect()->route('home');
    }
}
