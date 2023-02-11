<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Customer',
            'role' => 1,
            'email' => 'customer@gmail.com',
            'password' => bcrypt('custom123'),
            'remember_token' => Str::random(60)
        ]);
    }
}
