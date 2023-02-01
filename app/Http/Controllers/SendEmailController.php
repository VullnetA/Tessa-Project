<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RequestEmail;
use App\Mail\ContactMail;

class SendEmailController extends Controller
{
    function index()
    {
        return view('request');
    }

    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'surname'  =>  'required',
      'saloon' =>  'required',
      'address' =>  'required',
     ]);

     $data = array(
        'name'      =>  $request->name,
        'surname'   =>   $request->surname,
        'saloon'  =>   $request->saloon,
        'address'   =>    $request->address
    );

    Mail::to('ns29248@seeu.edu.mk')->send(new RequestEmail($data));
    return redirect()->back()->with('message','Request Sent Successfully');

    }

    public function contact()
    {
        return view('contact.contactpage');
    }

    public function sendEmail(Request $request)
    {
        $this->validate($request, [
            'name'  =>  'required',
            'email'  =>  'required',
            'phone_number'  =>  'required',
            'message'  =>  'required',
        ]);

        $details = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'message' => $request->message,
        );
        Mail::to('vullnetazizi9@gmail.com')->send(new ContactMail($details));
        return redirect()->back()->with('message','Form Sent Successfully');

    }
}

?>