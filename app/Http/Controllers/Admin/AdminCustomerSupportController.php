<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCustomerSupportController extends Controller
{
    // View
    function viewData(Request $request){
        if (!$request->session()->has('id')) {
            return redirect()->route('admin-login');
        }

        if (session('name')!='Admin') {
            return redirect()->route('admin-login');
        }

        $newQueries = DB::table('customers_queries')->where('status', null)->count();
        $completeQueries = DB::table('customers_queries')->where('status', 'Done')->count();

        $totalQueries = $newQueries + $completeQueries;

        $dataQueries  = compact('totalQueries', 'newQueries', 'completeQueries');        


        return view('admin.admin-customer-support', ['dataQueries'=>$dataQueries]);
    }
}
