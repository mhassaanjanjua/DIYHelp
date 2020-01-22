<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{

   
    //
    public function index()
    {

        $categories = Categories::all();
        return view('/categories', ['categories' => $categories]);
    }
}
