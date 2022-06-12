<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserManageOrdersController extends Controller
{
    // User Manage Appointments page
    function userManageAppointments(){
        //fetch user data from database
        $data = DB::table('appointment')->where('user_id', 1)->count();

        if ($data<=0) {
            $data = false;
            $AppointmentData=[];
        }else{
            $data = true;
            $AppointmentData = DB::table('appointment')
                        ->where('user_id', 1)
                        ->orderBy('order_date', 'desc')
                        ->orderBy('order_time', 'desc')
                        ->paginate(4);
        }
        return view('user.user-manage-orders', ['AppointmentData'=>$AppointmentData, 'data'=>$data]);
    }
}
