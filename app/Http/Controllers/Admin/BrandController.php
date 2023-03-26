<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Http\Requests\BrandRequest;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("Dashboard.brands.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Dashboard.brands.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandRequest $request)
    {
        $data = $request->all();
        if($request->hasFile('image'))
        {
            $data['image']=upload_image($request->file('image') , '_Brand_', 'brand');
        }
        else
        {
            $data['image'] = "defaults/product.jpg";
        }
        $brand = Brand::create($data);
        return $brand ? redirect(route("brands.index")) : redirect("brands.create");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BrandRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
