<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');  
    }
    public function submitContactForm(Request $request)
    {
        // Validate the form data
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'comments' => 'required',
            'email' => 'required|email',
        ]);

       
        // echo "here";die;
     
     // Send email
     
       Mail::to('techalphainstitute@techalphainstitute.com')->send(new ContactFormSubmitted($request->all()));
       session()->flash('message', 'Your message has been sent successfully!');

         return redirect()->back();
    }

}
