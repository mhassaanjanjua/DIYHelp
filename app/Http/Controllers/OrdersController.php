<?php

namespace App\Http\Controllers;

use App\Orders;
use App\ServiceApplications;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    //
    // public function notification()
    // {

    //     return view('/notification');
    // }

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
        return view('/approve', ['applications' => $applications]);
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
        return view('/orders', ['orders' => $orders]);
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
