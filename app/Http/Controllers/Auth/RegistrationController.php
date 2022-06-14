<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';


class RegistrationController extends Controller
{

    // User Registration Page
    function userRegistration(){
        return view('authentication.userAuth.registration');
    }

    function generateOTP(Request $request){

        $request->flash();

        // validation
        $validate = $request->validate([
            'name' => 'required',
            'password' => 'required|confirmed|min:8',
            'email' => 'required|email',
            'number' => 'required|digits:10',
        ]);

        // set form data to variable
        $name = $request->name;
        $number = $request->number;
        $email = $request->email;
        $password = $request->password;
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $otp = rand(100000,999999);

        $emailExist = DB::table('user_profile')->where('email', '=', $email)->count();
        
        if ($emailExist>0) {
            return redirect()->route('user-registration');
        }

        $id = DB::table('user_profile')
                ->insertGetId([
                    'name' => $name,
                    'phone_number' => $number,
                    'email' => $email,
                    'password' => $hash,
                    'verify' => 'Pending'
                ]);

        $mail = new PHPMailer(true);
        
        try {
            $mail->SMTPDebug = 2;									
            $mail->isSMTP();											
            $mail->Host	 = 'smtp.gmail.com;';					
            $mail->SMTPAuth = true;							
            $mail->Username = 'contact.vidya.official@gmail.com';				
            $mail->Password = 'frfeubtnmwawwshx';						
            $mail->SMTPSecure = 'tls';							
            $mail->Port	 = 587;
        
            $mail->setFrom('contact.vidya.official@gmail.com', 'Niddlecraft');		
            $mail->addAddress($email);
            
            $mail->isHTML(true);								
            $mail->Subject = 'Subject';
            $mail->Body = 'The OTP is '. $otp;
            $mail->send();
            
            return redirect()->route('otp-verify')->with(['otp'=> $otp, 'id' => $id]);
        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error:";
        }

    }
}
