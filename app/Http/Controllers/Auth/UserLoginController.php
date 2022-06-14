<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserLoginController extends Controller
{
    // view
    function loginView(){
        return view('authentication.userAuth.login');
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

        $user = DB::table('user_profile')->where('email', $email)->first();
        if ($user==null) {
            return redirect()->route('user-login');
        }

        $passwordDB = $user->password;

        if (!password_verify($password, $passwordDB)) {
            return redirect()->route('user-login');
        }

        $id = $user->uid;
        $name = $user->name;

        session(['id' => $id, 'name' => $name,]);
        return redirect()->route('user-profile');
    }
}
