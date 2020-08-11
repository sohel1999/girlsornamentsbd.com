<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    protected $withCount = 'products';

    protected $casts = [
        'status'=>'boolean'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
