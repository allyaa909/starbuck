<?php

namespace App\Models;
use App\Models\detail_order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
