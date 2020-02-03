<?php

namespace App\Http\Controllers;

use App\ServiceApplications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware(['auth', 'verified']);
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        return view('home');
    }

    public function contactus()
    {
       
        return view('contactus');
    }

    public function about()
    {
       
        return view('about');
    }

    public function videoHelp()
    {
       
        return view('videohelp');
    }

    public function applications()
    {

        $applications = ServiceApplications::all();
        return view('/profile', ['applications' => $applications]);
    }

    public function acceptApplication(Request $request)
    {

        $applications_id = $request->input('applications_id');
        $status = $request->input('status');
        $service_id = $request->input('get_services_id');

        \DB::table('orders')->insertGetId(
            ['applications_id' => $applications_id, 'status' => $status]
        );

        \DB::table('service_applications')->where('id', $applications_id)->update(array('status' => 'accepted'));
        
        \DB::table('service_applications')->where('get_services_id', '=', $service_id)
        ->where('id', '!=', $applications_id)
        ->update(array('status' => 'rejected'));

        $applications = ServiceApplications::where('get_services_id', '!=', $service_id)->get();
        return view('/profile', ['applications' => $applications]);
    }

    public function rejectApplication(Request $request)
    {

        $applications_id = $request->input('applications_id');
        $status = $request->input('status');

        \DB::table('service_applications')->where('id', $applications_id)->update(array('status' => $status));

        $applications = ServiceApplications::all();
        return view('/approve', ['applications' => $applications]);
    }

    public function acceptedOrders()
    {

        $orders = ServiceApplications::all();
        return view('/profile', ['orders' => $orders]);
    }

    public function orderGenerated(Request $request)
    {

        $applications_id = $request->input('applications_id');
        $status = $request->input('status');

        \DB::table('service_applications')->where('id', $applications_id)->update(array('status' => $status));

        $applications = ServiceApplications::all();
        return view('/order', ['applications' => $applications]);
    }
}
