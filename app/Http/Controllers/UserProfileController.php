<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{
    // View
    function viewData($UpdateStatus=null){
        //fetch user data from database
        $UserData = DB::select('select * from user_profile where id = :id', ['id'=>1]);
        return view('user.user-profile', ['UserData'=>$UserData, 'UpdateStatus'=>$UpdateStatus]);
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
            $UpdatedData = DB::update("UPDATE `user_profile` SET `name` = '$name', `phone_number` = '$number', `email` = '$email', `gender` = '$gender', `dob` = '$dob', `img` = '$imgpath', `password` = '$password' WHERE `user_profile`.`id` = :id", ['id'=>1]);
        }else{
            //update user data to database without image
            $UpdatedData = DB::update("UPDATE `user_profile` SET `name` = '$name', `email` = '$email', `gender` = '$gender', `dob` = '$dob', `password` = '$password' WHERE `user_profile`.`id` = :id", ['id'=>1]);
        }

        if ($UpdatedData) {
            $UpdateStatus = 'Updated';
        }else{
            $UpdateStatus = 'Failed';
        }

        return redirect('/user-profile/'.$UpdateStatus);
    }
}
