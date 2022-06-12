<?php

namespace App\Http\Controllers\admin\Queries_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompleteQueriesController extends Controller
{
    // Quarries View
    function quarriesViewData(){
        //fetch user data from database
        $data = DB::table('customers_queries')->where('status', 'Done')->count();

        if ($data<=0) {
            $data = false;
            $QuarriesData=[];
        }else{
            $data = true;
            $QuarriesData = DB::table('customers_queries')
                        ->where('status', 'Done')
                        ->orderBy('id', 'desc')
                        ->paginate(6);
        }
        return view('admin.customer_queries.complete-queries', ['QuarriesData'=>$QuarriesData, 'data'=>$data]);
    }
}
