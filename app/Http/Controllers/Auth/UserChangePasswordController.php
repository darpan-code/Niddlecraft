<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserChangePasswordController extends Controller
{
    // view
    function view(){
        return view('authentication.userAuth.change-password');
    }

    //change password
    function changePassword(Request $request){

         // validation
            $validate = $request->validate([
            'otp' => 'required',
            'otpconfirm' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8'
        ]);

        // set form data to variable
        $otp = $request->otp;
        $otpconfirm = $request->otpconfirm;
        $password = $request->password;
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $email = $request->email;

        if ($otp != $otpconfirm) {
            return redirect()->route('forgot-password');
        }

        $update = DB::table('user_profile')
                ->where('email',$email)
                ->update(['password' => $hash]);
        
        if ($update) {
            $user = DB::table('user_profile')->select('name', 'uid')->where('email',$email)->first();
            $id = $user->uid;
            $name = $user->name;
            session(['id' => $id, 'name' => $name,]);
            return redirect()->route('user-profile');
        }else{
            return redirect()->route('forgot-password');
        }

    }
}
