<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserFeedbackController extends Controller
{
    // View
    function viewData(){
        //fetch user data from database
        $Feedback = DB::table('user_feedback')->where('user_id', 1)->get();

        foreach ($Feedback as $item) {
            $message = $item->message;
            $uid = $item->user_id;
        }

        return view('user.user-feedback', ['message'=>$message, 'uid'=>$uid]);
    }

    // Update
    function updateData(Request $request){

        // validation
        $validate = $request->validate([
            'message' => 'required|max:220',
            'userid' => 'required',
        ]);

        // set form data to variable
        $message = $request->message;
        $userid = $request->userid;

        date_default_timezone_set("asia/kolkata");
        
        //update user data to database
        $UpdatedData = DB::table('user_feedback')->where('user_id', $userid)->update(['message'=>$message, 'date'=>date("Y/m/d"), 'time'=>date("H:i:s")]);

        if ($UpdatedData) {
            $UpdateStatus = 'Updated';
        }else{
            $UpdateStatus = 'Failed';
        }
        return redirect()->route('user-feedback')->with('status', $UpdateStatus);
    }
}
