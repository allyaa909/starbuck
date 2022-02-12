<?php

namespace App\Models;
use App\Models\detail_order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{

    protected $table = "order";

    protected $fillable = [
        'kopi_id',
        'total',
        
    ];

    public function detail_order(){
        return $this->hasMany(detail_order::class);
    }

}
