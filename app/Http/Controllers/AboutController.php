<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function create()
    {
      return view('about.contact');
    }

    public function store(ContactFormRequest $request)
    {

        \Mail::send('emails.contact',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ), function($message)
        {
            $message->from('jack4eagle@gmail.com');
            $message->to('jack4eagle@gmail.com', 'Admin')->subject('Alien contact!!!');
        });

      return \Redirect::route('contact')->with('message', 'Thanks for contacting us! We come in peace!!!');

    }


}
