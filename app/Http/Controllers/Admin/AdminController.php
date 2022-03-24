<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kode;
use App\Models\kopi;

use App\Models\size;
use App\Models\User;
use App\Models\Admin;
use App\Models\order;
use App\Models\Snack;
use App\Models\Bakery;
use App\Models\Tampilan;
use App\Models\detail_order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function check(Request $request){
         //Validate Inputs
         $request->validate([
            'email'=>'required|email|exists:admins,email',
            'password'=>'required|min:5|max:30'
         ],[
             'email.exists'=>'This email is not exists in admins table'
         ]);

         $creds = $request->only('email','password');

         if( Auth::guard('admin')->attempt($creds) ){
             return redirect()->route('admin.home');
         }else{
             return redirect()->route('admin.login')->with('fail','Incorrect credentials');
         }
    }

    function logout(){
        Auth::guard('admin')->logout();
        return redirect('/');
    }
    function customer(){
        $detail[] = detail_order::where('user_id',Auth::user()->id)->pluck('struk');
       $imp =  implode( ',' ,$detail);
        $order =order::where('detail_order_id', $imp)->get();
        $det = detail_order::where('user_id',Auth::user()->id)->value('user_id');
         $meja = User::where('id', $det)->get();
        $detail = detail_order::all();
        return view ('admin.customer', [
            "order" => $order,
            "detail" => $detail,
            "meja" => $meja
        ]);
    }

    public function view(){
        $view = Tampilan::all();
        return view ('admin.products', [
            "view" => $view
        ]);
     }
    public function update(Request $request){
    
        $page = Tampilan::find(1);
    

 if ($request->hasFile( 'logo')){
    $logo = $request->file('logo')->getClientOriginalName();
    $request->file('logo')->move(public_path().'/storage/images/', $logo);
}
else {
    $logo = $page->logo;
}
 if ($request->hasFile( 'img1')){
    $img1 = $request->file('img1')->getClientOriginalName();
    $request->file('img1')->move(public_path().'/storage/images/', $img1);
}
else {
    $logo = $page->img1;
}
 if ($request->hasFile( 'img2')){
    $logo = $request->file('img2')->getClientOriginalName();
    $request->file('img2')->move(public_path().'/storage/images/', $img2);
}
else {
    $logo = $page->img2;
}
 if ($request->hasFile( 'img3')){
    $logo = $request->file('img3')->getClientOriginalName();
    $request->file('img3')->move(public_path().'/storage/images/', $img3);
}
else {
    $logo = $page->img3;
}
    $page->update([
        "logo" => $logo,
        "title" => $request->title,
        "brand" => $request->brand,
        "desc" => $request->desc,
        "img1" => $img1,
        "img2" => $img2,
        "img3" => $img3
    ]);

 
         return "hm";   
    
}
    public function order(){
        $cash = Kode::all();
        
        foreach ($cash as $c) {
            $idorder = $c->kode_cash;
            $userid = $c->user_id;

            $kode = order::where('id' , $idorder)->value('kode_cash');
            $meja = User::where('id', $userid)->value('name');
        }

        return view('admin.order',[
            "kode" => $kode,
            "meja" => $meja
        ]);
    }
    public function pesanan(){
        $ord = order::where('status_payment', true)->pluck('id');
        foreach ($ord as $o) {
          $meja = Kode::where('kode_cash' , $o)->pluck('user_id');   
        }

      
        
        
        return view('admin.pesanan',[
            "pesanan" => detail_order::where('user_id', $meja)->get(),
           
        ]);
        
    }
    public function menu(){
        $kopi = kopi::where('kategori_id', 1)->value('img');
        $bakery = kopi::where('kategori_id', 2)->value('img');
        $snack = kopi::where('kategori_id', 3)->value('img');

        $kopi_id = kopi::where('kategori_id', 1)->value('kategori_id');
        $bakery_id = kopi::where('kategori_id', 2)->value('kategori_id');
        $snack_id = kopi::where('kategori_id', 3)->value('kategori_id');

        return view('admin.menu',[
            "kopi" => $kopi,
            "bakery" => $bakery,
            "snack" => $snack, 
            "kopi_id" => $kopi_id,
            "bakery_id" => $bakery_id,
            "snack_id" => $snack_id
        ]);
        
    }
    public function coffee(){
        $kopi = kopi::where('kategori_id', 1)->get();
        $size = size::all();
        return view('admin.coffee',[
            "kopi" => $kopi,
            "size" => $size
        ]);
        
    }
    public function roti(){
        $kopi = kopi::where('kategori_id', 2)->get();
        $size = size::all();
        return view('admin.coffee',[
            "kopi" => $kopi,
            "size" => $size
        ]);
        
    }
    public function bakery($id){

        $idd = $id;
        $kopi = kopi::where('kategori_id', $id)->get();
        $size = size::all();
        return view('admin.bakery',[
            "kopi" => $kopi, 
            "size" => $size,
            "idd"  => $idd
        ]);
        
    }
    public function updatecoffee( Request $request){
        if ($request->hasFile( 'img')){
        $img = $request->file('img')->getClientOriginalName();
        $request->file('img')->move(public_path().'/storage/images/', $img);
        }
        else {
            $img = $request->img;
        }
        $kopi = new kopi;
        $kopi->img = $img;
        $kopi->nama = $request->nama;
        $kopi->harga = $request->harga;
        $kopi->stok = $request->stok;
        $kopi->kategori_id = $request->kategori;
        $kopi->save();
        

        return "hm";
        
    }
    public function addcoffee($id){

       $kategori_id = $id;
        
        return view('admin.addcoffe',[
            "kategori_id" => $id
        ]);
    }
    }
