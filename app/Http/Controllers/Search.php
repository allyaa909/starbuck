<?php

namespace App\Http\Controllers;

use App\Models\kopi;
use Illuminate\Http\Request;

class Search extends Controller
{
    public function search(Request $request){
        $name = $request->name;
        
        $bakery = kopi::where('kategori_id',2);
        $search = $bakery->where('nama','like','%'.$name.'%')->get();

        return view('order.search',[
            "search" => $search
        ]);
        
    }
}
