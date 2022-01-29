<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\Types\Null_;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Rifki Padilah',
                'email' => 'rifki@gmail.com',
                'password' => Hash::make('rifki123'),
                'remember_token' => Null,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'name' => 'Lui Marvero',
                'email' => 'lui@gmail.com',
                'password' => Hash::make('lui123'),
                'remember_token' => Null,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ]
        ];

        User::insert($users);
    }
}
