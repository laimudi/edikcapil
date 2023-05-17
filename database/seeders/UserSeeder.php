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
        $users = [
            ['name' => 'Administrator', 'email' => 'admin@gmail.com', 'role_id' => 1, 'password' => Hash::make('admin')],
            ['name' => 'Kadis', 'email' => 'kadis@gmail.com', 'role_id' => 2, 'password' => Hash::make('kadis')],
            ['name' => 'Pengguna', 'email' => 'pengguna@gmail.com', 'role_id' => 3, 'password' => Hash::make('pengguna')]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
