<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account')->insert([
            [
                'account_id' => '1',
                'role_id' => 1,
                'gender_id' => 1,
                'first_name' => 'Admin',
                'middle_name' => '1',
                'last_name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
                'display_picture_link' => 'images/profile-pic/profile-picture.jpg'
            ],
            [
                'account_id' => '2',
                'role_id' => 2,
                'gender_id' => 1,
                'first_name' => 'User',
                'middle_name' => '1',
                'last_name' => 'User',
                'email' => 'user@user.com',
                'password' => bcrypt('password'),
                'display_picture_link' => 'images/profile-pic/no-image.jpg'
            ],
            [
                'account_id' => '3',
                'role_id' => 2,
                'gender_id' => 2,
                'first_name' => 'User',
                'middle_name' => '2',
                'last_name' => 'User',
                'email' => 'user2@user.com',
                'password' => bcrypt('password'),
                'display_picture_link' => 'images/profile-pic/no-image.jpg'
            ],
            [
                'account_id' => '4',
                'role_id' => 1,
                'gender_id' => 2,
                'first_name' => 'Admin',
                'middle_name' => '2',
                'last_name' => 'Admin',
                'email' => 'admin2@admin.com',
                'password' => bcrypt('password'),
                'display_picture_link' => 'images/profile-pic/profile-picture.jpg'
            ]

        ]);
    }
}
