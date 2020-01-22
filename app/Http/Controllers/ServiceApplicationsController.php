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
        $offer_services_id = $request->input('get_offers_id');
        $status = $request->input('status');
        $user_id = Auth::user()->id;
        $current_date_time = Carbon::now()->toDateTimeString();
        \DB::table('service_applications')->insertGetId(
            ['get_services_id' => $get_services_id, 'offer_services_id' => $offer_services_id, 'user_id' => $user_id, 'status' => $status, 'created_at' => $current_date_time]
        );
        return view('/notification');
    }


    public function index()
    {
        $applications = ServiceApplications::where('user_id', '=', Auth::user()->id)->get();
        return view('/applications', ['applications' => $applications]);
    }

    public function approve()
    {
        $applications = ServiceApplications::all();
        // foreach ($apps as $app) {
        //     $user_id = $app->get_services->user_id;
        //     if ($user_id == Auth::user()->id) {

        //     }
        // }

        
        // auth()->user()->services()->create($data);
        // $applications = auth()->user()->applications()->get_services()->get();
        // $applications = ServiceApplications::where($apps)
        // $user_id = ServiceApplications->get_services->
        // $applications = ServiceApplications::where('user_id', '=', Auth::user()->id)->get();
        return view('/approve', ['applications' => $applications]);
    }
}
