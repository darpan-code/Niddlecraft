<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserAppointmentController extends Controller
{
    //view
    function viewData(){
        $UserData = DB::table('user_profile')
                        ->leftJoin('user_address', 'user_profile.uid', '=', 'user_address.user_id')
                        ->leftJoin('user_body_measurements', 'user_profile.uid', '=', 'user_body_measurements.user_id')
                        ->where('uid', '=', "1")->get();

        return view('services.user-appointment', ['UserData'=>$UserData]);
    }

    //update
    function insertData(Request $request){

        // validation
        $validate = $request->validate([
            'service' => 'required',
            'serviceType' => 'required',
            'servicePlace' => 'required',
            'uploadDesign' => 'file|image|max:500',
        ]);

        // set form data to variable
        $service = $request->service;
        $serviceType = $request->serviceType;
        $servicePlace = $request->servicePlace;
        date_default_timezone_set("asia/kolkata");
        
        if ($request->uploadDesign) {
            $imgpath = $request->uploadDesign->store('images/clothDesigns','public');

            //insert order data to database with image
            $UpdatedData = DB::table('appointment')->insert([
                'user_id' => 1,
                'service' => $service,
                'service_type' => $serviceType,
                'service_place' => $servicePlace,
                'design_img' => $imgpath,
                'order_date' => date("Y/m/d"),
                'order_time' => date("H:i:s")
            ]);
        }else{
            //insert order data to database without image
            $UpdatedData = DB::table('appointment')->insert([
                'user_id' => 1,
                'service' => $service,
                'service_type' => $serviceType,
                'service_place' => $servicePlace,
                'order_date' => date("Y/m/d"),
                'order_time' => date("H:i:s")
            ]);
        }

        if ($UpdatedData) {
            $UpdateStatus = 'Updated';
        }else{
            $UpdateStatus = 'Failed';
        }
        return redirect()->route('user-appointment')->with('status', $UpdateStatus);
    }
}
