<?php

namespace App\Http\Controllers\Admin\Orders_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeliveryOrdersController extends Controller
{
    // Delivery View
    function deliveryViewData(){
        //fetch user data from database
        $data = DB::table('appointment')->where('order_status', 'Ready to be Delivered')->count();

        if ($data<=0) {
            $data = false;
            $AppointmentData=[];
        }else{
            $data = true;
            $AppointmentData = DB::table('appointment')
                        ->leftJoin('user_profile', 'appointment.user_id', '=', 'user_profile.uid')
                        ->leftJoin('user_address', 'appointment.user_id', '=', 'user_address.user_id')
                        ->leftJoin('user_body_measurements', 'appointment.user_id', '=', 'user_body_measurements.user_id')
                        ->where('order_status', 'Ready to be Delivered')
                        ->orderBy('order_date', 'asc')
                        ->orderBy('order_time', 'asc')
                        ->paginate(6);
        }
        return view('admin.order_pages.appointment.appointment-delivery', ['AppointmentData'=>$AppointmentData, 'data'=>$data]);
    }
    
    // Delivery Status Update
    function deliveryUpdateStatus(Request $request){

        // validation
        $validate = $request->validate([
            'status' => 'required',
            'apid' => 'required',
        ]);

        if ($request->status=='Rejected') {
            $validate = $request->validate([
                'reason' => 'required',
                
            ]);
        }

       // set form data to variable
        $status = $request->status;
        $reason = $request->reason;
        $id = $request->apid;

       //update user data to database
        $UpdatedData = DB::table('appointment')
                        ->where('apid', $id)
                        ->update(['order_status' => $status, 'reason' => $reason]);
        
        if ($UpdatedData) {
            $UpdateStatus = 'Updated';
        }else{
            $UpdateStatus = 'Failed';
        }
        return redirect()->route('delivery-appointments')->with('status', $UpdateStatus);

    }

}
