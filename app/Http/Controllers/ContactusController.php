<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function index()
    {
        return view('contactform');
    }
    public function register(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'phonenumber' => 'required|min:10',
                'message' => 'required'
                //'dob'=>'required|date'
            ]


            // [
            //     'username.required' => 'Fill the username',
            //     'email.required' => 'Enter a valid email',
            //     'password.required' =>'Enter password at least 6 characters',
            //     'password_confirmation.required' => 'Please match the above password'
            // ]
            );
            $data=request(['name','email','phonenumber','message']);
            // print_r($data);

            \Illuminate\Support\Facades\Mail::to(users: 'mahatoiron@gmail.com')
            ->send(new \App\Mail\ContactMe($data));

            return redirect(to: '/contactform')
            ->with('alert','Message sent successfully!');

            // return View::make('contact')->with('message', "Thanks, message has been sent");
    }
}
