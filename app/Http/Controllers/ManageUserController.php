<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManageUserController extends Controller
{
    // View
    function viewData(Request $request){
        //fetch user data from database
        if (!$request->search=='') {
            $UserData = DB::table('user_profile')->join('user_address', 'user_profile.id', '=', 'user_address.user_id')->where('name', 'LIKE', "%$request->search%")->paginate(8);
            $data = json_decode(json_encode($UserData),true);
            if (!$data['data']==[]) {
                $data = true;
            }else{
                $data = false;
            }
            return view('admin.manage-users', ['UserData'=>$UserData, 'data'=>$data]);
        }else{
            $UserData = DB::table('user_profile')->join('user_address', 'user_profile.id', '=', 'user_address.user_id')->paginate(8);
            $data = json_decode(json_encode($UserData),true);
            $data = json_decode(json_encode($UserData),true);
            if (!$data['data']==[]) {
                $data = true;
            }else{
                $data = false;
            }
            return view('admin.manage-users', ['UserData'=>$UserData, 'data'=>$data]);
        }
    }

}
