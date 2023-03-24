<?php
use App\Models\Category;
//to get all categories
if(!function_exists("get_categories")){
    function get_categories(){
        $categories = Category::orderBy("id","desc")->get();
        return $categories;
    }
}
