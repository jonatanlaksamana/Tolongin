<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin'.'@gmail.com',
            'password' => bcrypt('admin123'),
            'image' => 'deafult.jpg',
            'member' => 'admin',
            'profile_lengkap' => 'admin biasa',
            'reputasi' => 4,
            'phone_number' => '08123123',
            'alamat' => 'surga',
            'isPenjual' => false
        ]);

        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user'.'@gmail.com',
            'password' => bcrypt('user'),
            'image' => 'deafult.jpg',
            'member' => 'biasa',
            'profile_lengkap' => 'manusia biasa',
            'reputasi' => 4,
            'phone_number' => '08123123',
            'alamat' => 'surga',
            'isPenjual' => false
        ]);
    }
}
