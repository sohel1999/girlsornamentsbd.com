<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(10),
            'status'=>true,
            'role'=>'admin'
        ]);
        User::create([
            'name' => 'customer',
            'email' => 'customer@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('customer'),
            'remember_token' => Str::random(10),
            'status'=>true,
            'role'=>'customer'
        ]);
        factory(User::class, 3)->create();
    }
}
