<?php


// database/seeders/AgentSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $admin = User::create([
            'first_name'=> 'Admin',
            'last_name'=> 'Example',
            'username'=> 'admin',
            'email'=> 'admin@gmail.com',
            'password'=> Hash::make('111'),
            'role'=> '1',
    ]);

    $agent = User::create([
        'first_name'=> 'Agent',
        'last_name'=> 'Example',
        'username'=> 'agent',
        'email'=> 'agent@gmail.com',
        'password'=> Hash::make('111'),
        'role'=> '2',
]);


        $agent = User::create([
            'first_name'=> 'User',
            'last_name'=> 'Example',
            'username'=> 'user',
            'email'=> 'user@gmail.com',
            'password'=> Hash::make('111'),
            'role'=> '3',
            'status'=> 'active',
    ]);

    }
}
