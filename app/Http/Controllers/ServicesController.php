<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GetService;

class ServicesController extends Controller
{
    //
    public function index()
    {

        $this->_assignData['categories'] = \DB::table('categories')->get();
        $this->_assignData['subcategories'] = \DB::table('sub_categories')->get();
        $this->_assignData['services'] = \DB::table('get_services')->latest()->get();
        return view('/services', $this->_assignData);

    }

    public function getSubCategories(Request $request)
    {

        $data = SubCategories::select('name', 'id')->where('categories_id', $request->id)->take(100)->get();
        return response()->json($data); //then sent this data to ajax success
    }

    public function getServices(Request $request)
    {

        $servicedata = GetService::select('title', 'id')->where('sub_categories_id', $request->id)->take(100)->get();
        return response()->json($servicedata); //then sent this data to ajax success
    }

    public function specificServices($specific)
    {

        $services = GetService::latest()->where('sub_categories_id', '=', $specific)->get();
        return view('/services', ['services' => $services]);
    }

    public function serviceDetails($selectedService)
    {

        $services = GetService::latest()->where('id', '=', $selectedService)->get();
        return view('/details', ['services' => $services]);
    }

}
