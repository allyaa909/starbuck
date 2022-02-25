<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Mail\SendEmail;
use App\Models\detail_order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function confirm(Request $request){

        order::create([
         
         
            
        ]);
        // Mail::to('pklscola@gmail.com')->send(new SendEmail  );
        return view('pay');
        
    }
}
