<?php

namespace App\Http\Controllers;

use App\GetService;
use App\SubCategories;
use Illuminate\Http\Request;

class GetServiceController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function create()
    {

        $this->_assignData['categories'] = \DB::table('categories')->get();
        return view('post.create-service', $this->_assignData);
    }

    public function getSubCategories(Request $request)
    {

        $data = SubCategories::select('name', 'id')->where('categories_id', $request->id)->take(100)->get();
        return response()->json($data); //then sent this data to ajax success
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'categories_id' => ['required', 'numeric'],
            'sub_categories_id' => ['required', 'numeric'],
            'duration' => ['required', 'numeric'],
            'date' => ['required', 'date'],
            'street' => 'required',
            'city' => 'required',
            'wage' => ['required', 'numeric'],
        ]);

        auth()->user()->services()->create($data);
        $services = GetService::latest()->get();
        return view('/services', ['services' => $services]);
    }
}
