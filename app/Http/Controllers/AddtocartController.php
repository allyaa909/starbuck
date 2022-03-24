<?php

namespace App\Http\Controllers;

use App\Models\kopi;
use App\Models\size;
use App\Models\User;
use App\Models\order;
use App\Models\Addtocart;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\detail_order; 
use Illuminate\Support\Facades\Auth;

class AddtocartController extends Controller
{
    public function ambil($id, Request $request){
     
      $kopi = kopi::where('id', $id)->first();
      
      $kat = kopi::where('id',$id)->value('kategori_id');
      $rsize = $request->size;
     
      if ($kat == 2 ){
        $size = 0;
      }
      elseif($kat== 3) {
        $size = 0;
      }
      elseif($kat== 1) {
        $size = $rsize;
      }
      

      $price = $request->harga;
      if ($request->size == 1){
        $request->harga = $price+0;
      }
      elseif ($request->size == 2){
        $request->harga = $price-$price*5/100;
      }
      elseif ($request->size == 3){
        $request->harga = $price-$price*10/100;
      }
      else {
        $request->harga = $price;
      }

      $cekdata = detail_order::where('kopi_id', $kopi->id)->first();
      $cekjml = detail_order::where('user_id', Auth::id())->where('size_id', $request->size)->first();
      if($cekdata || $cekjml){
        $total_pemesanan = $cekdata->jumlah + 1;
        $harga =  $total_pemesanan * $cekdata->total;
        $cekdata->update([
            'jumlah' => $cekdata->jumlah + 1,
            'total' => $harga
        ]);
    }else {
        $all = $request->jumlah*$request->harga;
    
        $detail = new detail_order;
        $detail->kopi_id = $id;
        $detail->user_id = Auth::user()->id;
        $detail->size_id = $size;
        $detail->jumlah = $request->jumlah;
        $detail->total = $all;
        $detail->struk = Str::random(5);
        $detail->save();
    }
      
      
     
        // return "hm";
        
        
        // $jumlah = detail_order::where('total', Auth::user()->id)->first();
      
          
        
        // $add = new Addtocart ;
        // $add->detail_order_id = detail_order::where('user_id',Auth::user()->id)->get();
        // $add->total = $jumlah;
        // $add->save();
        // $data = [
        //   'kopi_id' => $kopi->id,
        //   'user_id' => $user_id,
        //   'size_id' => $request->size,
        // ];

        // $order_id = detail_order::create($data)->id;
        

        // $add = new Addtocart;
        // $add->detail_order_id = $->id;
        // $add->save();
        // Addtocart::create([
        //     'detail_order_id'   => $detail->id
            
        // ]);

        return redirect('/home');
          
    }
    // public function checkout(){
      
    //   $pesanan = Auth::user();
    
    //   $detail = detail_order::all();
    //   return view ('checkout' , [
    //     'detail' => $detail,
    //     'pesanan' =>  $pesanan
    //   ]);
    // }

    public function trash($id){
      $detail = detail_order::find($id);
      $detail->delete();
      return redirect('/checkout');
    }
}
