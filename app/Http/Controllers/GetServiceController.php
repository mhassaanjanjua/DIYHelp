<?php

namespace App\Http\Controllers;

use App\Categories;
use App\GetService;
use App\Services;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;


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
        $this->_assignData['sub_categories'] = \DB::table('sub_categories')->get();
        return view('post.create-service', $this->_assignData);
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
