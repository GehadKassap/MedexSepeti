<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Picqer\Barcode\BarcodeGeneratorPNG;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products  = Product::orderBy("id" , "desc")->get();
        return view("Dashboard.products.index",["products"=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Dashboard.products.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $generator = new BarcodeGeneratorPNG();
        $barcode = $generator->getBarcode($request->get('name'), $generator::TYPE_CODE_128);
        $barcode = base64_encode($barcode);//base64_decode
        $data['barcode']= $barcode;
        if($request->hasFile('image'))
        {
            $data['image']=upload_image($request->file('image') , '_Prodcut_', 'product');
        }
        else
        {
            $data['image'] = "defaults/product.jpg";
        }
        $product = Product::create($data);
        return $product ? redirect(route("products.index")) : redirect("products.create");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product  $product)
    {
        return view("Dashboard.products.show",['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view("Dashboard.products.edit",['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->destroy();
        return redirect("products.index");
    }
}
