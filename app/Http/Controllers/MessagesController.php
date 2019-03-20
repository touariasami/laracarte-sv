<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use App\Models\Messages;
use Illuminate\Support\Facades\Mail;
use Session ;


class MessagesController extends Controller
{
    //


    public function create(){
        return view('contacts.contact');
    }

    public function store(ContactRequest $request){

        $message = Messages::create($request->only('name','email','msg'));

        $mailable  = new ContactMessageCreated($message);

        Mail::to( config('laracarte.admin_support_email'))->send($mailable);

        Session::flash('info' , 'Nous vous repondrons dans les plus brefs délais');

        return redirect()->route('home');
    }
}
