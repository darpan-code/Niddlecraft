<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserFeedbackController extends Controller
{
    // View
    function viewData(Request $request){

        if (!$request->session()->has('id')) {
            return redirect()->route('user-login');
        }
        if (session('name')=='Admin') {
            return redirect()->route('admin-profile');
        }
        $id = session('id');
        $userName = session('name');

        //fetch user data from database
        $Feedback = DB::table('user_feedback')->where('user_id', $id)->first();

        if (!$Feedback==null){
            $message = $Feedback->message;
        }else{
            $message = '';
        }

        return view('user.user-feedback', ['message'=>$message, 'userName'=>$userName]);
    }

    // Update
    function updateData(Request $request){

        // validation
        $validate = $request->validate([
            'message' => 'required|max:220'
        ]);

        // set form data to variable
        $message = $request->message;
        
        $id = session('id');
        
        date_default_timezone_set("asia/kolkata");
        
        //update user data to database
        $UpdatedData = DB::table('user_feedback')->updateOrInsert(['user_id' => $id], ['message'=>$message, 'date'=>date("Y/m/d"), 'time'=>date("H:i:s")]);
        
        if ($UpdatedData) {
            $UpdateStatus = 'Updated';
        }else{
            $UpdateStatus = 'Failed';
        }
        return redirect()->route('user-feedback')->with('status', $UpdateStatus);
    }
}
