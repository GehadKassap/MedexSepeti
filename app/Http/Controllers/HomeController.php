<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class HomeController extends Controller
{
    //
    public function home(){
        $categories = Category::orderBy("id","desc")->take(8)->get();
        return view("index",
            [
                "categories" => $categories
            ]
        );
    }
}
