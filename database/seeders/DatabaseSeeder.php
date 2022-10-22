<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'email' => 'Test@mail.ru',
            'name' => 'Maxim',
            'password' => 'qwerty12',
            'token' => 0
        ]);

        \App\Models\Product::create([
            'product_name' => 'Кофта',
            'price' => '5000',
            'amount' => '100'
        ]);

        \App\Models\Product::create([
            'product_name' => 'Штаны',
            'price' => '4000',
            'amount' => '80'
        ]);

        
    }
}
