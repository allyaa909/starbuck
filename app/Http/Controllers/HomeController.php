<?php

namespace App\Http\Controllers;

use App\Models\kopi;
use App\Models\size;
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
    {  $size = size::all();
        $kopi = kopi::all();
        return view ('home', [
            "kopi" => $kopi,
            "size" => $size
        ]);
    }
}
