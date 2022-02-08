<?php

namespace App\Http\Controllers\Backend;


use App\Models\order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\detail_order;

class OrderController extends Controller
{
    public function store(Request $request){
        // ret?urn $request->all()
        $order_id = Order::create([
            'total'     => $request->total,
            'kopi_id'=> $request->kopi_id
            
        ])->id;

        detail_order::create([
            'kopi_id'   => $request->kopi_id,
            'order_id'  => $order_id,
        ]);
    return redirect('/checkout');

    }
}
