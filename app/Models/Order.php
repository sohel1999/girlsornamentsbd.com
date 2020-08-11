<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];


    public static function getStatus()
    {
        return [
            'pending'=>'badge-dot badge-brand mr-1',
            'processing'=>'badge-dot badge-info mr-1',
            'complete'=>'badge-dot badge-success mr-1',
            'cancelled'=>'badge-dot badge-danger mr-1'
        ];
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'id');
    }
}
