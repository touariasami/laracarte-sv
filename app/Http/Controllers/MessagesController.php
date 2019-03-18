<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    //


    public function create(){
        return view('contacts.contact');
    }

    public function store(Request $request){
        return 'hello';
    }
}
