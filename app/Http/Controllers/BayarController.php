<?php

namespace App\Http\Controllers;

use App\Models\Kode;
use App\Models\order;
use Illuminate\Support\Str;
use App\Models\detail_order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class BayarController extends Controller
{
    public function pay(Request $request){


    //    foreach($detail as $d){

    //     $id = [
    //       "detail_order_id"  => $d
    //     ];
    // }



// $products = order::where('detail_order_id')->get()->toArray();
// $output = $id->implode("detail_order_id" ,', ');


$arr = $request->detail;
$id = implode( ',' ,$arr);


// $detail[]= detail_order::where('user_id',Auth::user()->id)->pluck('struk');
// $imp =  implode( ',' ,$detail);

// $cur = array();
// $or = detail_order::all();
// foreach($detail as $it){
//     $code = order::where('detail_order_id', $detail)->pluck('id');
// $item[] = $it;
// //  return $code;
// }
// $array = $detail->flatten()->pluck('struk')->all(); 
// $code = order::where('detail_order_id', $imp)->pluck('id');
// $email= DB::table('detail_order')->where('user_id', 1 )->pluck('struk');


// return $code;
// foreach($or as $r){
//     $ar = $r->struk;
//     $code[] = order::where('detail_order_id', $ar)->pluck('id');
   
// }
// $ord = order::all();

// $users = DB::table('order')
// ->whereIn('detail_order_id', ['qtm9f', 'OC6ju'])
// ->get();


// return $users;

// return view('cash',[
//     "id" => $code,
//     "detail" => $detail,
//     "ord" => $ord,
//     "or" => $or
// ]);

    
  

if ($request->pay == 1){
    $order = new order;
    $order->detail_order_id = $arr;
    $order->status_payment = false;
    $order->kode_cash = Str::random(4);
    $order->save();

    $detail[] = detail_order::where('user_id',Auth::user()->id)->pluck('struk');
    $imp =  implode( ',' ,$detail);
    $code = order::where('detail_order_id', $imp)->pluck('id');
    
// $ord = order::all();

$struk = order::where('detail_order_id', $imp)->value('kode_cash');
$orderid = order::where('detail_order_id', $imp)->value('id');

$detid =  order::where('detail_order_id', $imp)->pluck('detail_order_id');

foreach ($detid as $det) {
    $show = detail_order::where('struk' , $det)->value('user_id');
}

$kode = new Kode;
$kode->kode_cash = $orderid;
$kode->user_id = $show;
$kode->save();

// $cash = order::where('id' , $orderid)->value('kode_cash');
// $meja = User::where('id', $show)->value('name');

// view('admin.order',[
//     "orderid" => $orderid,
//     "show" => $show
// ]);
    return view('cash',[
        "order" => $order,
        "id" => $code,
        "detail" => $detail,
        "orderid" => $orderid,
        "show" => $show
    ]);
}
elseif ($request->pay == 2){
    $order = new order;
    $order->detail_order_id = $arr;
    $order->status_payment = false;
    $order->kode_scan = Str::random(4);
    $order->save();

    $detail[] = detail_order::where('user_id',Auth::user()->id)->pluck('struk');
    $imp =  implode( ',' ,$detail);
    $data = order::where('detail_order_id', $imp)->get();
    foreach($data as $d){
        $qrcode = QrCode::size(400)->generate($d->kode_scan);
    }
    
  
    
    $order = order::all();
    return view('scan',[
        "order" => $order,
        "qrcode" => $qrcode
    ]);
}
else {

    return redirect()->back();
}


   
}
}
