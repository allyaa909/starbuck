<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\kopi;

class size extends Model
{
    protected $table = "size";
    public function kopi(){
        return $this->hasMany(size::class);
    }
}
