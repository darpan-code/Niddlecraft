<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
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

        //fetch user data from database
        $UserData = DB::table('user_profile')->where('uid', $id)->get();
        return view('user.user-profile', ['UserData'=>$UserData]);
    }

    // Update
    function updateData(Request $request){

        // validation
        $validate = $request->validate([
            'name' => 'required',
            // 'password' => 'required|min:8',
            'email' => 'required|email',
            'number' => 'required|digits:10',
            'gender' => 'required|alpha',
            'dob' => 'required|date',
            'image' => 'file|image|max:500',
        ]);

        // set form data to variable
        $name = $request->name;
        // $password = $request->password;
        // $hash = password_hash($password, PASSWORD_BCRYPT);
        $email = $request->email;
        $number = $request->number;
        $gender = $request->gender;
        $dob = $request->dob;
        $id = session('id');
        if ($request->image) {
            $imgpath = $request->image->store('images/customers','public');

            //update user data to database with image
            $UpdatedData = DB::table('user_profile')->where('uid', $id)->update(['name'=>$name, 'email'=>$email, 'phone_number'=>$number, 'gender'=>$gender, 'dob'=>$dob, 'img'=>$imgpath]);

        }else{
            //update user data to database without image
            $UpdatedData = DB::table('user_profile')->where('uid', $id)->update(['name'=>$name, 'email'=>$email, 'phone_number'=>$number, 'gender'=>$gender, 'dob'=>$dob]);
        }

        if ($UpdatedData) {
            $UpdateStatus = 'Updated';
            session(['name' => $name]);
        }else{
            $UpdateStatus = 'Failed';
        }
        return redirect()->route('user-profile')->with('status', $UpdateStatus);
    }
}
