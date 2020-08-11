<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Brand extends Model
{
    protected $guarded = [];

    protected $casts = [
        'status'=>'boolean'
    ];
}
