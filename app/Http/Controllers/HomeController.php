<?php

namespace App\Http\Controllers;

use App\Models\kopi;
use App\Models\size;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  
        $size = size::all();
        $id1 = Kategori::where('id', 1)->value('id');
        $id2 = Kategori::where('id', 2)->value('id');
        $id3 = Kategori::where('id', 3)->value('id');
        $id = [
            "id1" => $id1,
            "id2" => $id2,
            "id3" => $id3
        ];
        $kopi = kopi::all();

        return view ('home', [
            "kopi" => $kopi,
            "size" => $size,
            "id1" => $id1,
            "id2" => $id2,
            "id3" => $id3
        ]);
    }
}
