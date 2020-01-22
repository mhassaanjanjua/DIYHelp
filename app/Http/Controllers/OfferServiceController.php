<?php

namespace App\Http\Controllers;

use App\OfferService;
use Illuminate\Http\Request;

class OfferServiceController extends Controller
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
        return view('post.create-offer', $this->_assignData);
    }

    public function store()
    {
        $data = request()->validate([
            'profession' => 'required',
            'description' => 'required',
            'categories_id' =>  ['required', 'numeric'],
            'sub_categories_id' =>  ['required', 'numeric'],
            'availability_hours' => ['required', 'numeric'],
            'availability_days' => ['required', 'date'],
            'charges' => 'numeric',
            'total_hours' => ['required', 'numeric'],
        ],
        ['categories_id.required' => 'Please select any Category',
        'sub_categories_id.required' => 'Please select any Sub Category',
        ]);

        auth()->user()->offers()->create($data);
        $offers = OfferService::latest()->get();
        return view('/offers', ['offers' => $offers]);
    }
}
