<?php

namespace App\Models;

use App\Models\order;
use App\Models\Addtocart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class detail_order extends Model
{
    protected $table = "detail_order";

    protected $fillable = [
        'kopi_id',
        'order_id',
        
    ];
    public function order(){
        return $this->belongsTo(order::class);
    }

    public function Addtocart(){
        return $this->hasMany(Addtocart::class);
    }
}
