<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RegistrationOtpVerifyController extends Controller
{
    // OTP view
    function otpView(){
        return view('authentication.userAuth.otp-verify');
    }

    // OTP verify
    function otpVerify(Request $request){
                
        // validation
        $validate = $request->validate([
            'otp' => 'required',
            'otpconfirm' => 'required',
            'id' => 'required'
        ]);

        // set form data to variable
        $otp = $request->otp;
        $otpconfirm = $request->otpconfirm;
        $id = $request->id;

        if ($otp != $otpconfirm) {
            return redirect()->route('user-registration');
        }

        $update = DB::table('user_profile')
                ->where('uid',$id)
                ->update(['verify' => 'Verified']);
        
        if ($update) {
            $user = DB::table('user_profile')->select('name')->where('uid',$id)->first();
            $name = $user->name;
            session(['id' => $id, 'name' => $name,]);
            return redirect()->route('user-profile');
        }else{
            return redirect()->route('user-registration');
        }

    }
}
