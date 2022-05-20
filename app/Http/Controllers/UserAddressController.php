<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserAddressController extends Controller
{
        // View
        function viewData($UpdateStatus=null){
            $UserName = 'Megha Sen';
            //fetch user data from database
            $UserData = DB::select('select * from user_address where user_id = :id', ['id'=>1]);
            return view('user.user-manage-address', ['UserData'=>$UserData, 'UpdateStatus'=>$UpdateStatus, 'UserName'=>$UserName]);
        }
        
        // Update
        function updateData(Request $request){
            // validation 
            $validate = $request->validate([
                'address' => 'required',
                'landmark' => 'required',
                'city' => 'required',
                'district' => 'required',
                'pincode' => 'required|integer',
                'state' => 'required',
            ]);
            
            // set form data to variable
            $address = $request->address;
            $landmark = $request->landmark;
            $city = $request->city;
            $pincode = $request->pincode;

            //update user data to database
            $UpdatedData = DB::update("UPDATE `user_address` SET `address` = '$address', `landmark` = '$landmark', `city` = '$city', `pincode` = '$pincode' WHERE `user_address`.`user_id` = :id", ['id'=>1]);
    
            if ($UpdatedData) {
                $UpdateStatus = 'Updated';
            }else{
                $UpdateStatus = 'Failed';
            }
    
            return redirect('/user-manage-address/'.$UpdateStatus);
        }
}
