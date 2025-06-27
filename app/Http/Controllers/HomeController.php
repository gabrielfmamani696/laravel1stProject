<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(){
        // query builder
        // $categories = DB::table('categories')->get();
        //eloquent
        $categories = Category::all(); 
        return view('home', ['categories'=> $categories]);
    }
}
