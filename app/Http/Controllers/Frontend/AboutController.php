<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
    public function index()
    {
        return view('frontend.about');  
    }
    
    public function home(){
        return view('frontend.index');  
    }
    public function connectMail(Request $request)
    {
    
        $name = $request->input('name');
        $phone = $request->input('phone');
        $message = $request->input('message');
         $detail = array('name'=>$name,
                        'phone'=>$phone,
                        'msg' => $message);
        $sub = "Enquiry from Website";
        Mail::send('frontend.email_demo',compact('detail'), function ($message) use($sub) {
            $message->from('noreply@techalphainstitute.com','Enquiry');
            $message->to('techalphainstitute@techalphainstitute.com');
            $message->subject($sub);
        });

        
        Session::flash('success',"Your enquiry has been received. we're contact you shortly");
        return redirect()->back();
        
    }
}
