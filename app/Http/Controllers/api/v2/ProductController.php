<?php

namespace App\Http\Controllers\api\v2;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('name','asc')->get();

        $transforamedProducts =$products->map(function($product){

            return[
                'id'=>$product->id,
                'brand' => $product->brand->name,
                'category' => $product->category->name,
                'name' =>$product->name,
                'description'=>$product->description,
                'price'=>$product->price,
                'image_path'=> $product->getImagePath(),
                'qty'=> $product->qty,
                'alert_stock'=> $product->alert_stock,             
            ];
        });

        return response()->json(['data' => $transforamedProducts],200);
        
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
