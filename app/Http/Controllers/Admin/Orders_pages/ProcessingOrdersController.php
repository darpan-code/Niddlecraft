<?php

namespace App\Http\Controllers\Admin\Orders_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProcessingOrdersController extends Controller
{
     // Processing View
    function processingViewData(){
        //fetch user data from database
        $data = DB::table('appointment')->where('order_status', 'Accepted')->count();

        if ($data<=0) {
            $data = false;
            $AppointmentData=[];
        }else{
            $data = true;
            $AppointmentData = DB::table('appointment')
                        ->leftJoin('user_profile', 'appointment.user_id', '=', 'user_profile.uid')
                        ->leftJoin('user_address', 'appointment.user_id', '=', 'user_address.user_id')
                        ->leftJoin('user_body_measurements', 'appointment.user_id', '=', 'user_body_measurements.user_id')
                        ->where('order_status', 'Accepted')
                        ->orderBy('order_date', 'asc')
                        ->orderBy('order_time', 'asc')
                        ->paginate(6);
        }
        return view('admin.order_pages.appointment.appointment-processing', ['AppointmentData'=>$AppointmentData, 'data'=>$data]);
    }
    
    // Processing Status Update
    function processingUpdateStatus(Request $request){

        // validation
        $validate = $request->validate([
            'status' => 'required',
            'apid' => 'required',
        ]);

        if ($request->status=='Rejected') {
            $validate = $request->validate([
                'reason' => 'required',
                
            ]);
        }elseif ($request->status=='Ready to be Delivered'){
            $validate = $request->validate([
                'delivaryDate' => 'required|date',
            ]);
        }

       // set form data to variable
        $status = $request->status;
        $reason = $request->reason;
        $delivaryDate = $request->delivaryDate;
        $id = $request->apid;

       //update user data to database
        $UpdatedData = DB::table('appointment')
                        ->where('apid', $id)
                        ->update(['order_status' => $status, 'reason' => $reason, 'delivery_date' => $delivaryDate]);
        
        if ($UpdatedData) {
            $UpdateStatus = 'Updated';
        }else{
            $UpdateStatus = 'Failed';
        }
        return redirect()->route('processing-appointments')->with('status', $UpdateStatus);

    }

}
