<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin;

use App\Models\order;
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
        $old_logo = $page->logo;
        $old_img1 = $page->img1;
        $old_img2 = $page->img2;
        $old_img3 = $page->img3;
 
    
if ($request->hasFile( 'logo') && $request->hasFile('img1')  && $request->hasFile('img2')  && $request->hasFile('img3')){
    $logo = $request->file('logo')->getClientOriginalName();
        $request->file('logo')->move(public_path().'/storage/images/', $logo);
        $img1 = $request->file('img1')->getClientOriginalName();
        $request->file('img1')->move(public_path().'/storage/images/', $img1);
        $img2 = $request->file('img2')->getClientOriginalName();
        $request->file('img2')->move(public_path().'/storage/images/', $img2);
         $img3 = $request->file('img3')->getClientOriginalName();
    $request->file('img3')->move(public_path().'/storage/images/', $img3);
        $page->update([
            "logo" => $logo,
            "title" => $request->title,
            "brand" => $request->brand,
            "desc" => $request->desc,
            "img1" => $img1,
            "img2" => $img2,
            "img3" => $img3
        ]);
    }

 
 elseif ($request->hasFile( 'logo') && $request->hasFile('img1')){
    $logo = $request->file('logo')->getClientOriginalName();
    $request->file('logo')->move(public_path().'/storage/images/', $logo);
    $img1 = $request->file('img1')->getClientOriginalName();
    $request->file('img1')->move(public_path().'/storage/images/', $img1);

    $page->update([
        "logo" => $logo,
        "title" => $request->title,
        "brand" => $request->brand,
        "desc" => $request->desc,
        "img1" => $img1,
        "img2" => $old_img2,
        "img3" => $old_img3
    ]);
}
 
 elseif ($request->hasFile( 'logo') && $request->hasFile('img2')){
    $logo = $request->file('logo')->getClientOriginalName();
    $request->file('logo')->move(public_path().'/storage/images/', $logo);
    $img2 = $request->file('img2')->getClientOriginalName();
    $request->file('img2')->move(public_path().'/storage/images/', $img2);
    $page->update([
        "logo" => $logo,
        "title" => $request->title,
        "brand" => $request->brand,
        "desc" => $request->desc,
        "img1" => $old_img1,
        "img2" => $img2,
        "img3" => $old_img3
    ]);
}
 elseif ($request->hasFile( 'logo') && $request->hasFile('img3')){
    $logo = $request->file('logo')->getClientOriginalName();
    $request->file('logo')->move(public_path().'/storage/images/', $logo);
    $img3 = $request->file('img3')->getClientOriginalName();
    $request->file('img3')->move(public_path().'/storage/images/', $img3);
    $page->update([
        "logo" => $logo,
        "title" => $request->title,
        "brand" => $request->brand,
        "desc" => $request->desc,
        "img1" => $old_img1,
        "img2" => $old_img2,
        "img3" => $img3
    ]);
}
 elseif ($request->hasFile( 'img1') && $request->hasFile('img2')){
    $img1 = $request->file('img1')->getClientOriginalName();
    $request->file('img1')->move(public_path().'/storage/images/', $img1);
    $img2 = $request->file('img2')->getClientOriginalName();
    $request->file('img2')->move(public_path().'/storage/images/', $img2);
    $page->update([
        "logo" => $old_logo,
        "title" => $request->title,
        "brand" => $request->brand,
        "desc" => $request->desc,
        "img1" => $img1,
        "img2" => $img2,
        "img3" => $old_img3
    ]);
}
 elseif ($request->hasFile( 'img1') && $request->hasFile('img3')){
    $img1 = $request->file('img1')->getClientOriginalName();
    $request->file('img1')->move(public_path().'/storage/images/', $img1);
    $img3 = $request->file('img3')->getClientOriginalName();
    $request->file('img3')->move(public_path().'/storage/images/', $img3);
    $page->update([
        "logo" => $old_logo,
        "title" => $request->title,
        "brand" => $request->brand,
        "desc" => $request->desc,
        "img1" => $img1,
        "img2" => $old_img2,
        "img3" => $img3
    ]);
}
 elseif ($request->hasFile( 'img2') && $request->hasFile('img3')){
    $img2 = $request->file('img2')->getClientOriginalName();
    $request->file('img2')->move(public_path().'/storage/images/', $img2);
    $img3 = $request->file('img3')->getClientOriginalName();
    $request->file('img3')->move(public_path().'/storage/images/', $img3);
    $page->update([
        "logo" => $old_logo,
        "title" => $request->title,
        "brand" => $request->brand,
        "desc" => $request->desc,
        "img1" => $old_img1,
        "img2" => $img2,
        "img3" => $img3
    ]);
}
 elseif ($request->hasFile( 'logo')){
    $logo = $request->file('logo')->getClientOriginalName();
    $request->file('logo')->move(public_path().'/storage/images/', $logo);
    $page->update([
        "logo" => $logo,
        "title" => $request->title,
        "brand" => $request->brand,
        "desc" => $request->desc,
        "img1" => $old_img1,
        "img2" => $old_img2,
        "img3" => $old_img3
    ]);
}
 elseif ($request->hasFile( 'img1')){
    $img1 = $request->file('img1')->getClientOriginalName();
    $request->file('img1')->move(public_path().'/storage/images/', $img1);
    $page->update([
        "logo" => $old_logo,
        "title" => $request->title,
        "brand" => $request->brand,
        "desc" => $request->desc,
        "img1" => $img1,
        "img2" => $old_img2,
        "img3" => $old_img3
    ]);
}
 elseif ($request->hasFile( 'img2')){
    $img2 = $request->file('img2')->getClientOriginalName();
    $request->file('img2')->move(public_path().'/storage/images/', $img2);
    $page->update([
        "logo" => $old_logo,
        "title" => $request->title,
        "brand" => $request->brand,
        "desc" => $request->desc,
        "img1" => $old_img1,
        "img2" => $img2,
        "img3" => $old_img3
    ]);
}
 elseif ($request->hasFile( 'img3')){
    $img3 = $request->file('img3')->getClientOriginalName();
    $request->file('img3')->move(public_path().'/storage/images/', $img3);
    $page->update([
        "logo" => $old_logo,
        "title" => $request->title,
        "brand" => $request->brand,
        "desc" => $request->desc,
        "img1" => $old_img1,
        "img2" => $old_img2,
        "img3" => $img3
    ]);
}

else {
    $page->update([
        "logo" => $old_logo,
        "title" => $request->title,
        "brand" => $request->brand,
        "desc" => $request->desc,
        "img1" => $old_img1,
        "img2" => $old_img2,
        "img3" => $old_img3
    ]);
}
 
         return "hm";   
    
}
    }
