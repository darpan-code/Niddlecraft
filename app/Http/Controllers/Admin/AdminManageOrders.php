<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminManageOrders extends Controller
{
    // View
    function viewData(){

        $newAppointment = DB::table('appointment')->where('order_status', null)->count();
        $processingAppointment = DB::table('appointment')->where('order_status', 'Accepted')->count();
        $deliveryAppointment = DB::table('appointment')->where('order_status', 'Ready to be Delivered')->count();
        $completeAppointment = DB::table('appointment')->where('order_status', 'Delivered')->count();
        $cancelAppointment = DB::table('appointment')->where('order_status', 'Rejected')->count();

        $totalAppointment = $newAppointment + $processingAppointment + $deliveryAppointment + $completeAppointment + $cancelAppointment;

        $dataAppointment  = compact('totalAppointment', 'newAppointment', 'processingAppointment', 'deliveryAppointment', 'completeAppointment','cancelAppointment');        


        return view('admin.admin-manage-orders', ['dataAppointment'=>$dataAppointment]);
    }
}
