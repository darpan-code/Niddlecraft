<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';


class UserForgetPasswordController extends Controller
{

    // view
    function view(){
        return view('authentication.userAuth.forgot-password');
    }

    function generateOTP(Request $request){
        
        // validation
        $validate = $request->validate([
            'email' => 'required|email'
        ]);

        // set form data to variable
        $email = $request->email;
        $otp = rand(100000,999999);
        
        $emailExist = DB::table('user_profile')->where('email', '=', $email)->count();
        
        if ($emailExist==0) {
            return redirect()->route('forgot-password');
        }

        $mail = new PHPMailer(true);
        
        try {
            $mail->SMTPDebug = 0;									
            $mail->isSMTP();											
            $mail->Host	 = 'smtp.gmail.com;';					
            $mail->SMTPAuth = true;							
            $mail->Username = 'contact.vidya.official@gmail.com';				
            $mail->Password = 'frfeubtnmwawwshx';						
            $mail->SMTPSecure = 'tls';							
            $mail->Port	 = 587;
        
            $mail->setFrom('contact.niddlecraft@gmail.com', 'Niddlecraft');		
            $mail->addAddress($email);
            
            $mail->isHTML(true);								
            $mail->Subject = 'Subject';
            $mail->Body = 'The OTP is '. $otp;
            $mail->send();
            
            return redirect()->route('change-password')->with(['otp'=> $otp, 'email' => $email]);
        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error:";
        }

    }
}
