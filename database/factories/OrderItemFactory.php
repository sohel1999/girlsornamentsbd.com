<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory
 *
 */

use App\Models\OrderItem;
use Faker\Generator as Faker;

$factory->define(OrderItem::class, function (Faker $faker) {
    return [
        'order_id'=>factory(\App\Models\Order::class)->create()->id,
        'product_id'=>factory(\App\Models\Product::class)->create()->id,
        'unit_price'=>rand(1, 100),
        'quantity'=>rand(1, 10),
        'line_total'=>rand(1, 100)
    ];
});
