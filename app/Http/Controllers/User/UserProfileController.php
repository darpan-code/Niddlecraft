<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{
    // View
    function viewData(){
        //fetch user data from database
        $UserData = DB::table('user_profile')->where('uid', 1)->get();
        return view('user.user-profile', ['UserData'=>$UserData]);
    }

    // Update
    function updateData(Request $request){

        // validation
        $validate = $request->validate([
            'name' => 'required',
            'password' => 'required|min:8',
            'email' => 'required|email',
            'number' => 'required|digits:10',
            'gender' => 'required|alpha',
            'dob' => 'required|date',
            'image' => 'file|image|max:500',
        ]);

        // set form data to variable
        $name = $request->name;
        $password = $request->password;
        $email = $request->email;
        $number = $request->number;
        $gender = $request->gender;
        $dob = $request->dob;
        if ($request->image) {
            $imgpath = $request->image->store('images/customers','public');

            //update user data to database with image
            $UpdatedData = DB::table('user_profile')->where('uid', 1)->update(['name'=>$name, 'email'=>$email, 'gender'=>$gender, 'dob'=>$dob, 'password'=>$password, 'img'=>$imgpath]);

        }else{
            //update user data to database without image
            $UpdatedData = DB::table('user_profile')->where('uid', 1)->update(['name'=>$name, 'email'=>$email, 'gender'=>$gender, 'dob'=>$dob, 'password'=>$password]);
        }

        if ($UpdatedData) {
            $UpdateStatus = 'Updated';
        }else{
            $UpdateStatus = 'Failed';
        }
        return redirect()->route('user-profile')->with('status', $UpdateStatus);
    }
}
