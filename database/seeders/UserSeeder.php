<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
                'name' => 'admin',
                'role' => 'admin',
                'password'=> Hash::make('123'),
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
        ]);
        $admin->assignRole('admin');
    }
}
