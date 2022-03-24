<?php

namespace App\Http\Controllers;

use App\Models\Kode;
use App\Models\order;
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
        $ord = order::where('status_payment', true)->get();
        foreach ($ord as $o){
            $o->delete();
        }

        

       
        return redirect('/');
    }
}
