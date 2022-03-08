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
        $imgData = array();
        if($request->hasfile('image')) {
            foreach($request->file('image') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/storage/post-images/', $name);  
                $imgData[] = $name;  
            }
        }
    
        $page = Tampilan::find(1);
        $view = Tampilan::all();
        $page->update([
            "logo" => $request->logo,
            "tittle" => $request->tittle,
            "banner" => $request->logo,
        ]);
        return view('admin.products',[
            "view" => $view
        ]);
    }
}
