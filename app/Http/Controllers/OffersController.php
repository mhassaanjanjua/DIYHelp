<?php

namespace App\Http\Controllers;

use App\OfferService;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {

        $offers = OfferService::latest()->get();
        return view('/offers', ['offers' => $offers]);
    }

    public function offerServices($specific)
    {

        $offers = OfferService::latest()->where('sub_categories_id', '=', $specific)->get();
        return view('/details', ['offers' => $offers]);
    }

    public function offerDetails($selectedService)
    {

        $offers = OfferService::latest()->where('id', '=', $selectedService)->get();
        return view('/offerdetails', ['offers' => $offers]);
    }
}
