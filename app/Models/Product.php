<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected  $guarded = [];

    protected  $casts = [
        'images'=>'array',
        'status'=>'boolean'
    ];
}
