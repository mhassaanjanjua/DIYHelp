<?php

namespace App\Http\Controllers;

use App\ServiceApplications;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class ServiceApplicationsController extends Controller
{
    //
    public function store(Request $request)
    {

        $get_services_id = $request->input('get_services_id');
        $offer_services_id = $request->input('offer_services_id');
        $status = $request->input('status');
        $user_id = Auth::user()->id;
        $current_date_time = Carbon::now()->toDateTimeString();
        \DB::table('service_applications')->insertGetId(
            ['get_services_id' => $get_services_id, 'offer_services_id' => $offer_services_id, 'user_id' => $user_id, 'status' => $status, 'created_at' => $current_date_time]
        );
        return view('/notification');
    }


    public function manage()
    {

        $applications = ServiceApplications::all();
        return view('profile',['applications' => $applications]); 
    }

    public function approve()
    {

        $applications = ServiceApplications::all();
        return view('/approve', ['applications' => $applications]);
    }
}
