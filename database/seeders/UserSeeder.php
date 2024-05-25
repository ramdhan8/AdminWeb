<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(9)->create();

        $user = \App\Models\User::factory()->create([
            'name' => 'Admin Ramdan',
            'email' => 'ramdan@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '081234567890',
            'roles' => 'ADMIN',
        ]);
    }
}
