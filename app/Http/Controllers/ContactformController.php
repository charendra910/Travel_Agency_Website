<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactformController extends Controller
{
    public function index()
    {
        return view('contactform');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
          'name' => 'required',
          'email' => 'required|max:255',

          'phonenumber' => 'required|min:10',
          'message' => 'required',
        ]);


        $data = new Contact;

        $data->name = $request->name;
        $data->email = $request->email;

        $data->phonenumber = $request->phonenumber;
        $data->message = $request->message;

        $data->save();

        return redirect('contact')->with('status', 'Form Data Has Been validated and insert');


    }
    public function show()
    {
        //return view("records");
        $data =  Contact::all();
        return view('display',['record'=>$data]);


    }


           public function delete($id)
         {
         $data = Contact::findOrFail($id);
         
         $data->delete();

           return redirect()->back()->with('success','records deleted successfully');
          }


          public function editform($id)
          {
              $data = Contact::find($id);
              return view('edit', compact('data'));
          }

          public function update(Request $request, $id)
          {
              $request->validate([

                'name' => 'required',
                'email' => 'required|max:255',

                'phonenumber' => 'required|min:10',
                'message' => 'required|max:255',
              ]);
              $data = Contact::find($id);
              $data->name = $request->name;
               $data->email = $request->email;

                 $data->phonenumber = $request->phonenumber;
              $data->message = $request->message;

                 $data->save();
              return redirect('/records')
              ->with('success','data Has Been updated successfully');
         }


}
