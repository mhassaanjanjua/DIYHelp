<?php

namespace App\Http\Controllers;

use App\Categories;
use App\SubCategories;
use Illuminate\Http\Request;

class SubCategoriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    //

    public function allSubCategories()
    {
        
        $sub_categories = SubCategories::all();
        return view('/sub-categories', ['sub_categories' => $sub_categories]);
    }


    public function subCategory($sub_categories)
    {

        $sub_categories = SubCategories::where('categories_id', '=', $sub_categories)->get();
        return view('/sub-categories', ['sub_categories' => $sub_categories]);
    }
}
