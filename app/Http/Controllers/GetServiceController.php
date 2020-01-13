<?php

namespace App\Http\Controllers;

use App\GetService;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;

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
        return view('post.create-service');
    }

    // public function store(Request $request)
    // {

    //     $validatedData = $request->validate([
    //         'title' => 'required',
    //         'description' => 'required',
    //         'category' => 'required',
    //         'sub_category' => 'required',
    //         'duration' => 'required|numeric',
    //         'date' => 'required|date',
    //         'street' => 'required',
    //         'city' => 'required',
    //         'wage' => 'required|numeric',
    //     ]);

    //     GetService::create($request->all());

    //     return redirect('services');

    // }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'sub_category' => 'required',
            'duration' => ['required', 'numeric'],
            'date' => ['required', 'date'],
            'street' => 'required',
            'city' => 'required',
            'wage' => ['required', 'numeric'],
        ]);

        auth()->user()->services()->create($data);
        // auth()->user()->create($data);
        $users = GetService::all();
        return view('/services', ['users' => $users]);
        // // categories()->sub_categories()->create($data);
        // // auth()->user()->create($data);

        // // GetService::create($data);
        // return redirect('/services');
    }
}
