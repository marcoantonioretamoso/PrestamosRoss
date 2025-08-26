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
        if (!User::where('email', 'admin@gmail.com')->exists()) {
            $user = User::create([
                'name' => 'Admin',
                // 'last_name' => 'Amin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
            ]);
        }
    }
}
