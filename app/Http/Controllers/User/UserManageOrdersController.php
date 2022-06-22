<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserManageOrdersController extends Controller
{
    
    // User Manage Appointments page
    function userManageAppointments(Request $request){
        
        if (!$request->session()->has('id')) {
            return redirect()->route('user-login');
        }
        if (session('name')=='Admin') {
            return redirect()->route('admin-profile');
        }
        $id = session('id');
        $userName = session('name');

        //fetch user data from database
        $data = DB::table('appointment')->where('user_id', $id)->count();

        if ($data<=0) {
            $data = false;
            $AppointmentData=[];
        }else{
            $data = true;
            $AppointmentData = DB::table('appointment')
                        ->where('user_id', $id)
                        ->orderBy('order_date', 'desc')
                        ->orderBy('order_time', 'desc')
                        ->paginate(4);
        }
        return view('user.user-manage-orders', ['AppointmentData'=>$AppointmentData, 'data'=>$data, 'userName' =>$userName]);
    }
}
