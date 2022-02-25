<?php

namespace App\Http\Controllers;

use App\Models\detail_order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfirmController extends Controller
{
    public function confirm(){

        $confirm = detail_order::where('user_id',Auth::user()->id)->get();
        foreach ($confirm as $c){
            $c->delete();
        }
       
        return view ('index');
    }
}
