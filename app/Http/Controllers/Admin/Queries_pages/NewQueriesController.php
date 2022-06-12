<?php

namespace App\Http\Controllers\admin\Queries_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewQueriesController extends Controller
{
    // Quarries View
    function quarriesViewData(){
        //fetch user data from database
        $data = DB::table('customers_queries')->where('status', null)->count();

        if ($data<=0) {
            $data = false;
            $QuarriesData=[];
        }else{
            $data = true;
            $QuarriesData = DB::table('customers_queries')
                        ->where('status', null)
                        ->orderBy('id', 'asc')
                        ->paginate(6);
        }
        return view('admin.customer_queries.new-queries', ['QuarriesData'=>$QuarriesData, 'data'=>$data]);
    }

    // Quarries Status Update
    function quarriesUpdateStatus(Request $request){

        // validation
        $validate = $request->validate([
            'checkBox' => 'required',
            'id' => 'required',
        ]);

        if ($request->status=='Rejected') {
            $validate = $request->validate([
                'reason' => 'required',
                
            ]);
        }

        date_default_timezone_set("asia/kolkata");

        // set form data to variable
        $status = $request->checkBox;
        $id = $request->id;

        //update user data to database
        $UpdatedData = DB::table('customers_queries')
                        ->where('id', $id)
                        ->update(['status' => $status, 'date' => date("Y/m/d"), 'time' => date("H:i:s")]);
        
        if ($UpdatedData) {
            $UpdateStatus = 'Updated';
        }else{
            $UpdateStatus = 'Failed';
        }
        return redirect()->route('new-queries')->with('status', $UpdateStatus);

    }
}
