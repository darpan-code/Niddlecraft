<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminLoginController extends Controller
{
    // view
    function loginView(){
        return view('authentication.adminAuth.admin-login');
    }

    // login
    function login(Request $request){

        // validation
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $email = $request->email;
        $password = $request->password;
        $admin = DB::table('admin')->where('email', $email)->first();

        if ($admin==null) {
            return redirect()->route('admin-login');
        }

        $passwordDB = $admin->password;

        if ($password != $passwordDB) {
            return redirect()->route('admin-login');
        }

        $id = $admin->id;
        $name = $admin->name;

        session(['id' => $id, 'name' => $name,]);
        return redirect()->route('admin-profile');
    }
}
