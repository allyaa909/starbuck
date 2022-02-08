<?php

namespace App\Http\Controllers;
use App\Models\kopi;
use Illuminate\Http\Request;

class KopiController extends Controller
{
    public function lihatmenu(){
    $kopi = kopi::all();
    return view ('order', [
        "kopi" => $kopi
    ]);
}
    public function lihat(){
    $kopi = kopi::all();
    return view ('checkout', [
        "kopi" => $kopi
    ]);

    }
}
