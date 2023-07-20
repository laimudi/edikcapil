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
            [
                'name' => 'Administrator',
                'email' => 'admin@gmail.com',
                'role_id' => 1,
                'password' => Hash::make('admin')
            ],
            [
                'name' => 'Kepala Dinas',
                'email' => 'kadis@gmail.com',
                'role_id' => 2,
                'password' => Hash::make('kadis')
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
