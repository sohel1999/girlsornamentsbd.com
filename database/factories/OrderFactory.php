<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory
 *
 */

use App\Models\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'order_number'=>'INV_'.rand(0, 10000),
        'user_id'=>factory(\App\Models\User::class)->create()->id,
        'total'=>rand(1, 1000),
        'cus_name'=>$faker->name,
        'cus_email'=>$faker->email,
        'cus_phone'=>$faker->phoneNumber,
        'address'=>$faker->address,
        'shipped_at'=>$faker->dateTime,
        'status'=>$faker->randomElement(['pending','processing','complete','cancelled']),
    ];
});
