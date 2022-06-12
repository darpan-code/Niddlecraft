<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminProfileController extends Controller
{
    // View
    function viewData(){
        //fetch admin data from database.
        $AdminData = DB::table('admin')->where('id', 1)->get();
        return view('admin.admin-profile', ['AdminData'=>$AdminData]);
    }

    // Update Data.
    function updateData(Request $request){
    
        // Validation 
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'number' => 'required|digits:10',
            'password' => 'required|min:8',
        ]);

        // Set form data to variable
        $name = $request->name;
        $password = $request->password;
        $email = $request->email;
        $number = $request->number;

        //Update admin data.
        $UpdatedData = DB::table('admin')->where('id', 1)->update(['name'=>$name, 'email'=>$email, 'phone_number'=>$number, 'password'=>$password]);

        if ($UpdatedData) {
            $UpdateStatus = 'Updated';
        }else{
            $UpdateStatus = 'Failed';
        }
        return redirect()->route('admin-profile')->with('status', $UpdateStatus);
    }
}
