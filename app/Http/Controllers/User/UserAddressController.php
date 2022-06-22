<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserAddressController extends Controller
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
        $UserName = session('name');

        //fetch user data from database
        $UserData = DB::table('user_address')->where('user_id', $id)->get();

        // convert class based array to normal array
        $UserData = json_decode(json_encode($UserData),true);

        if ($UserData===[]) {
            $address = '';
            $landmark = '';
            $city = '';
            $district = 'Hooghly';
            $pincode = '';
            $state = 'West Bengal';
            $UserData = compact('address', 'landmark', 'city', 'district', 'pincode', 'state');
        }else{
            foreach ($UserData as $value) {
                $UserData  = $value;
            }
        }
        return view('user.user-manage-address', ['UserData'=>$UserData, 'UserName'=>$UserName]);
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
        $district = 'Hooghly';
        $state = 'West Bengal';
        $pincode = $request->pincode;

        $id = session('id');

        //update user data to database
        $UpdatedData = DB::table('user_address')->updateOrInsert(['user_id'=>$id], ['address'=>$address, 'landmark'=>$landmark, 'city'=>$city, 'district'=>$district, 'pincode'=>$pincode, 'state'=>$state]);
        
        if ($UpdatedData) {
            $UpdateStatus = 'Updated';
        }else{
            $UpdateStatus = 'Failed';
        }
        return redirect()->route('user-manage-address')->with('status', $UpdateStatus);

    }
}
