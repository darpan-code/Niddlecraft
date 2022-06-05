<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class UserBodyMeasurementsController extends Controller
{
    // View
    function viewData(){
        $UserName = 'Megha Sen';
        //fetch user data from database
        $measurementsData = DB::table('user_body_measurements')->where('user_id', 1)->get();

        // convert class based array to normal array
        $measurementsData  = json_decode(json_encode($measurementsData ),true);

        if ($measurementsData ===[]) {
            $shoulder = '';
            $chest = '';
            $bust = '';
            $underBust = '';
            $waist = '';
            $wearingWaist = '';
            $hip = '';
            $thigh = '';
            $upperArm = '';
            $inseam = '';
            $outseam = '';
            $totalRise = '';
            $hipAtCrotch = '';
            $calf = '';
            $bustPoint = '';
            $knee = '';
            $hpsToWaist = '';
            $frontHip = '';
            $backHip = '';
            $frontRise = '';
            $backRise = '';
            $height = '';
            $waistToKnee = '';

            $measurementsData  = compact('shoulder', 'chest', 'bust', 'underBust', 'waist', 'wearingWaist', 'hip', 'thigh', 'upperArm', 'inseam', 'outseam', 'totalRise', 'hipAtCrotch', 'calf', 'bustPoint', 'knee', 'hpsToWaist', 'frontHip', 'backHip', 'frontRise', 'backRise', 'height', 'waistToKnee');
        }else{
            foreach ($measurementsData  as $value) {
                $measurementsData   = $value;
            }
        }
        return view('user.user-body-measurements',['data'=>$measurementsData, 'UserName'=>$UserName]);
    }

    // Update
    function updateData(Request $request){
        // set form data yo variable
        $shoulder = $request->shoulder;
        $chest = $request->chest;
        $bust = $request->bust;
        $underBust = $request->underBust;
        $waist = $request->waist;
        $wearingWaist = $request->wearingWaist;
        $hip = $request->hip;
        $thigh = $request->thigh;
        $upperArm = $request->upperArm;
        $inseam = $request->inseam;
        $outseam = $request->outseam;
        $totalRise = $request->totalRise;
        $hipAtCrotch = $request->hipAtCrotch;
        $calf = $request->calf;
        $bustPoint = $request->bustPoint;
        $knee = $request->knee;
        $hpsToWaist = $request->hpsToWaist;
        $frontHip = $request->frontHip;
        $backHip = $request->backHip;
        $frontRise = $request->frontRise;
        $backRise = $request->backRise;
        $height = $request->height;
        $waistToKnee = $request->waistToKnee;

        //update user data to database
        $UpdatedData = DB::table('user_body_measurements')->updateOrInsert(['user_id'=>1], ['shoulder'=>$shoulder, 'chest'=>$chest, 'bust'=>$bust, 'underBust'=>$underBust, 'waist'=>$waist, 'wearingWaist'=>$wearingWaist, 'hip'=>$hip, 'thigh'=>$thigh, 'upperArm'=>$upperArm, 'inseam'=>$inseam, 'outseam'=>$outseam, 'totalRise'=>$totalRise, 'hipAtCrotch'=>$hipAtCrotch, 'calf'=>$calf, 'bustPoint'=>$bustPoint, 'knee'=>$knee, 'hpsToWaist'=>$hpsToWaist, 'frontHip'=>$frontHip, 'backHip'=>$backHip, 'frontRise'=>$frontRise, 'backRise'=>$backRise, 'height'=>$height, 'waistToKnee'=>$waistToKnee]);

        if ($UpdatedData) {
            $UpdateStatus = 'Updated';
        }else{
            $UpdateStatus = 'Failed';
        }
        return redirect()->route('user-body-measurements')->with('status', $UpdateStatus);
    }
}
