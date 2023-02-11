<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;;

class MaidSeeder extends Seeder
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
            'name' => 'Maid',
            'role' => 1,
            'email' => 'maid@gmail.com',
            'password' => bcrypt('maid123'),
            'remember_token' => Str::random(60)
        ]);
    }
}
