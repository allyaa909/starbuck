<?php

namespace App\Http\Controllers;
use App\Models\kopi;
use App\Models\detail_order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;  

class KopiController extends Controller
{
    public function lihatmenu(){
    $kopi = kopi::all();
    return view ('order', [
        "kopi" => $kopi
    ]);
}
    public function lihat(){
    $pesanan = Auth::user()->name;
    $price = detail_order::where('total',Auth::user()->id)->get();
    $detail = detail_order::where('user_id',Auth::user()->id)->get();
    $sum = detail_order::where('user_id',Auth::user()->id)->get()->sum("total");
    $jumlah = detail_order::where('user_id',Auth::user()->id)->get()->sum("jumlah");
    return view ('checkout', [
        "detail" => $detail,
        "pesanan" => $pesanan,
        "price" => $price,
        "sum" => $sum,
        "jumlah" => $jumlah
        ]);


    }
}
