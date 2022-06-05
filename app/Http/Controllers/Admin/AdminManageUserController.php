<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminManageUserController extends Controller
{
    // View
    function viewData(Request $request){
        //fetch user data from database
        if (!$request->search=='') {
            $request->flash();
            $UserData = DB::table('user_profile')->leftJoin('user_address', 'user_profile.uid', '=', 'user_address.user_id')->where('name', 'LIKE', "%$request->search%")->paginate(8);
            $data = json_decode(json_encode($UserData),true);
            if (!$data['data']==[]) {
                $data = true;
            }else{
                $data = false;
            }
            return view('admin.manage-users', ['UserData'=>$UserData, 'data'=>$data]);
        }else{
            $request->flash();
            $UserData = DB::table('user_profile')->leftJoin('user_address', 'user_profile.uid', '=', 'user_address.user_id')->paginate(8);
            $data = json_decode(json_encode($UserData),true);
            if (!$data['data']==[]) {
                $data = true;
            }else{
                $data = false;
            }
            return view('admin.admin-manage-users', ['UserData'=>$UserData, 'data'=>$data]);
        }
    }

}
