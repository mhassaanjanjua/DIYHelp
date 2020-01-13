<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {

        $categories = Categories::all();
        return view('categories',compact('categories',$categories));


        // return view('categories');
    }
}
