<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class SubCategoriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function index($sub_categories)
    {

        $sub_categories = Categories::findOrFail($sub_categories);
        
        return view('sub-categories', [
            'sub_categories' => $sub_categories
        ]);
    }
}
