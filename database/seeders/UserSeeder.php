<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $admin = User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('123'),
        // ]);

        // $admin->assignRole('admin');

        $sadmin = User::create([
            'name' => 'Admin CV',
            'email' => 'rejekisumber016@gmail.com',
            'password' => bcrypt('bahagiaselalu324'),
        ]);

        $sadmin->assignRole('superadmin');
    }
}