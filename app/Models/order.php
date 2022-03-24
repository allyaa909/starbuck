<?php

namespace App\Models;
use App\Models\Kode;
use App\Models\detail_order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class order extends Model
{

    protected $table = "order";
    protected $guarded = [];
    protected $casts = [
        'detail_order_id' => 'array'
    ];
    public function detail_order(){
        return $this->belongsTo(detail_order::class);
    }
    public function kode(){
        return $this->hasMany(Kode::class);
    }

}
