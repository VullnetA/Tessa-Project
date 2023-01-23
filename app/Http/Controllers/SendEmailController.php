<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RequestEmail;

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
}

?>