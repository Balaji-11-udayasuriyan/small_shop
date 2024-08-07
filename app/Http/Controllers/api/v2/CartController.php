<?php

namespace App\Http\Controllers\api\v2;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carts = Cart::orderBy('customer_id','asc')->get();

        $transforamedCarts =$carts->map(function($cart){

            return[
                'id'=>$cart->id,
                'customer' =>$cart->user->email,
                // 'product_id' =>$cart->product->id,
                'qty' =>$cart->qty,
                
                
            ];
        });

        return response()->json(['data' => $transforamedCarts],200);
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
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
