<?php

namespace App\Models;

use App\Models\order;
use App\Models\detail_order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Addtocart extends Model
{
    protected $table = "addtocart";

    protected $fillable = [
        'detail_order_id'
    ];
    public function detail_order(){
        return $this->belongsTo(detail_order::class);
    }
}
