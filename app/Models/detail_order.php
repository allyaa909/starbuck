<?php

namespace App\Models;

use App\Models\Kode;
use App\Models\kopi;
use App\Models\size;
use App\Models\User;
use App\Models\order;
use App\Models\Addtocart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class detail_order extends Model
{
    protected $table = "detail_order";

    protected $guarded = [];

    // protected $guarded = ['total'];
   
    public function Addtocart(){
        return $this->hasMany(Addtocart::class);
    }
    public function order(){
        return $this->hasMany(order::class);
    }
    public function kopi(){
        return $this->belongsTo(kopi::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function size(){
        return $this->belongsTo(size::class);
    }

    public function kode(){
        return $this->hasMany(Kode::class);
    }
}