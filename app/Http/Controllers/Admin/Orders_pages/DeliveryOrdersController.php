<?php

namespace App\Http\Controllers\Admin\Orders_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeliveryOrdersController extends Controller
{
     // View
    function viewData(){
        return view('admin.order_pages.appointment.appointment-delivery');
    }
}
