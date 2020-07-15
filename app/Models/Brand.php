<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected  $guarded = [];

    protected  $casts = [
        'status'=>'boolean'
    ];
}
