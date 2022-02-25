<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class CashController extends Controller
{
    public function check($id, Request $request){
        $order = order::where('id', $id)->value('kode_cash');

        
        if ($request->code == $order){
            order::where('id', $id)->update(array('status_payment' => true));
            return view('konfirmasi');

        }
        else {
            return 'gagal';
        }
    }
}
