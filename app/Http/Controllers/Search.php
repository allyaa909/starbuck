<?php

namespace App\Http\Controllers;

use App\Models\kopi;
use Illuminate\Http\Request;

class Search extends Controller
{
    public function search(Request $request){
        $name = $request->name;
        $id = $request->id;
        $search = kopi::where('nama','like','%'.$name.'%')->get();
        
        return view('order.search',[
            "search" => $search
        ]);
        
    }
}
