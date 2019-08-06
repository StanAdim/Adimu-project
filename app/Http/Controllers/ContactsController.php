<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{

    public function create()
    {
        return view('contacts.create');
    }


    public function store()
    {
       $data = request() ->validate([
           'name'=>'required',
           'email'=>'required',
           'comment'=>'required',
       ]);
        //email sending

        Mail::to($data['email'])->send(new ContactFormMail($data));
        return redirect('/contact')->with('message','We have reserved you comment ');


    }

}
