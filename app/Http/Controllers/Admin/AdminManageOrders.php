<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminManageOrders extends Controller
{
    // View
    function viewData(){
        return view('admin.admin-manage-orders');
    }
}
