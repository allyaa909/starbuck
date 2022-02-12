<?php

namespace App\Models;

use App\Models\kopi;
use App\Models\User;
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
        'user_id',
        'jumlah'
    ];

    // protected $guarded = ['total'];
   
    public function Addtocart(){
        return $this->hasMany(Addtocart::class);
    }
    public function kopi(){
        return $this->belongsTo(kopi::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
