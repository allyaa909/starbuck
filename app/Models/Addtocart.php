<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addtocart extends Model
{
    protected $table = "addtocart";

    protected $fillable = [
        'detail_order_id'
    ];

}
