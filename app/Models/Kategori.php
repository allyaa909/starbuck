<?php

namespace App\Models;

use App\Models\kopi;
use App\Models\Snack;
use App\Models\Bakery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{   
    protected $table = "kategori";

    protected $guarded = [];
    use HasFactory;

    public function kopi(){
        return $this->hasMany(kopi::class);
    }
    public function bakery(){
        return $this->hasMany(Bakery::class);
    }
    public function snack(){
        return $this->hasMany(Snack::class);
    }

}
