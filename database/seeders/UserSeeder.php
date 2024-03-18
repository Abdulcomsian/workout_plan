<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'first_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '089445234433',
            'password' => Hash::make('admin123')
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'first_name' => 'Muhammad',
            'last_name' => 'Nouman',
            'email' => 'nouman@gmail.com',
            'phone' => '09734545555',
            'password' => Hash::make('nouman123')
        ]);

        $user->assignRole('user');
    }
}
