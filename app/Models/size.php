<?php

namespace App\Models;

use App\Models\kopi;
use App\Models\detail_order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class size extends Model
{
    protected $table = "size";
    public function kopi(){
        return $this->hasMany(size::class);
    }
    public function detail_order(){
        return $this->hasMany(detail_order::class);
    }
}
