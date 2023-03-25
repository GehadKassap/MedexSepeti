<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
class HomeController extends Controller
{
    //
    public function home(){
        $specialOffers = Product::where('discount' , '!=' , '0.00')->orderBy("discount",'desc')->take(9)->get();
        $categories = Category::orderBy("id","desc")->take(8)->get();
        $justArivedProds = Product::orderBy("id","desc")->take(15)->get();
        $mostViewedProds = Product::orderBy("id","desc")->take(15)->get();
        return view("index",
            [
                "categories" => $categories,
                'specialOffers'=>$specialOffers,
                'justArivedProds'=>$justArivedProds,
                'mostViewedProds'=>$mostViewedProds
            ]
        );
    }
}
