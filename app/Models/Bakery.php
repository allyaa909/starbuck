<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bakery extends Model
{
    protected $table = "bakery";

    protected $guarded = [];
    use HasFactory;
}
