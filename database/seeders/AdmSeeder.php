<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class AdmSeeder extends Seeder
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
            'role' => 1,
            'alamat' => 'Cirebon',
            'no_tlp' => '0812345567',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
            'remember_token' => Str::random(60)
        ]);
    }
}
