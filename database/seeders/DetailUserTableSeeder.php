<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DetailUser;

class DetailUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail_user = [
            [
                'users_id' => 1,
                'photo' => '',
                'role' => 'Web Developer',
                'contact_number' => '',
                'biography'  => '',

            ],
            [
                'users_id' => 2,
                'photo' => '',
                'role' => 'Web Designer',
                'contact_number' => '',
                'biography'  => '',

            ]
        ];

        DetailUser::insert($detail_user);
    }
}
