<?php

namespace App\Http\Controllers;
use App\Models\ContactInquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InquiryfrontController extends Controller
{
    public function contact_store(Request $request)
    {
        $fname = $request->input('fname');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $message = $request->input('message');
        $cur_page = $request->input('cur_page');

        if($fname !== null && $email !== null && $mobile !== null && $message !== null) {
            $to = '';
            if (!$email) {
                $to = "demo@gmail.com";
            }else{
                $to = $email;
            }

            $subject = "Subscribed!!!";
            $message = 'Hi ,<br>Thank You for Join With Us. <br><b>Our team will reach you Shortly.</b><br><br>Happy referring!<br>Expoloop.';

            $header = "From:demo@mail.com \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";

            $retval = mail ($to,$subject,$message,$header);

            date_default_timezone_set('Asia/Kolkata');
            $datetime = date("d-M-Y H:i:s");
            $redirect_link = $cur_page;

            $Contact = new ContactInquiry;
            $Contact->fname = $fname;
            $Contact->email = $email;
            $Contact->mobile = $mobile;
            $Contact->message = $message;
            $Contact->created_at = $datetime;
            $Contact->updated_at = $datetime;
            $Contact->save();
            
            return 'success';
        }else{
            return 'error';
        }

    }
}
