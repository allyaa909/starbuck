<?php

namespace App\Models;
use App\Models\detail_order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kopi extends Model
{
    protected $table = "kopi";

    public function detail_order(){
        return $this->hasMany(detail_order::class);
    }
    
}
