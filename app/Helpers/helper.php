<?php
use App\Models\Category;
use App\Models\Setting;
//to get all categories
if(!function_exists("get_categories")){
    function get_categories(){
        $categories = Category::orderBy("id","desc")->get();
        return $categories;
    }
}

if(!function_exists('setting')){
    function setting($key)
    {
        $setting = Setting::where('key',$key)->orderBy('id','desc')->first();
        return $setting ? $setting : false;
    }
}
