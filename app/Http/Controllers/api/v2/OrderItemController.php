<?php

namespace App\Http\Controllers\api\v2;

use App\Http\Controllers\Controller;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderitems = OrderItem::orderBy('order_id','asc')->get();

        $transforamedOrderItems =$orderitems->map(function($orderitem){

            return[
                'id'=>$orderitem->id,
                'order_id' => $orderitem->order->name,
                'product_id' => $orderitem->product->name,
                'qty' =>$orderitem->qty,
                'unit_price'=>$orderitem->unit_price,
                'amount'=>$orderitem->amount,
                'discount'=> $orderitem->discount,
          
            ];
        });

        return response()->json(['data' => $transforamedOrderItems],200);
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
    public function show(OrderItem $orderItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrderItem $orderItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderItem $orderItem)
    {
        //
    }
}
