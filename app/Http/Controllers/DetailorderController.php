<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\detail_order;
use Illuminate\Http\Request;

class DetailorderController extends Controller
{
    public function detailorder(){
    $detail = detail_order::all();
    return view('order', [
        'detail' => $detail
    ]);
 }
 public function user(){
    $user = User::all();
    return view('checkout', [
        'user' => $user
    ]);
 }  
}

