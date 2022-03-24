<?php

namespace App\Http\Controllers;
use App\Models\kopi;
use App\Models\size;
use App\Models\Tampilan;
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
    public function bakery(){
        $kopi = kopi::where('kategori_id', 2)->get();
    return view ('order.bakery', [
        "kopi" => $kopi
    ]);
}
    public function snacks(){
        $kopi = kopi::where('kategori_id', 3)->get();
    return view ('order.snacks', [
        "kopi" => $kopi
    ]);
}
    public function coffe(){
    $kopi = kopi::where('kategori_id', 1)->get();
    $size = size::all();
    return view ('order.coffee', [
        "kopi" => $kopi,
        "size" => $size
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

    public function index(){
        $tampilan = Tampilan::all();
        return view ('index',[
            "tampilan" => $tampilan
        ]);
    }
}
