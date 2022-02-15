<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pay(Request $request){
        $total = $request->total;
        return view ('confirm', [
            "total" => $total
        ]);
    }
}
