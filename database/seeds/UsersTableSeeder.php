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
        //1
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

        //2
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

        //3
        DB::table('users')->insert([
            'name' => 'celi',
            'email' => 'celi'.'@gmail.com',
            'password' => bcrypt('user'),
            'image' => 'deafult.jpg',
            'member' => 'biasa',
            'profile_lengkap' => 'manusia primitif',
            'reputasi' => 4,
            'phone_number' => '09732537',
            'alamat' => 'neraka',
            'isPenjual' => false
        ]);

        //4
        DB::table('users')->insert([
            'name' => 'alwan',
            'email' => 'alwan'.'@gmail.com',
            'password' => bcrypt('user'),
            'image' => 'deafult.jpg',
            'member' => 'biasa',
            'profile_lengkap' => 'manusia ganteng',
            'reputasi' => 4,
            'phone_number' => '08123123',
            'alamat' => 'surga',
            'isPenjual' => false
        ]);


        //5
        DB::table('users')->insert([
            'name' => 'vinson',
            'email' => 'vinson'.'@gmail.com',
            'password' => bcrypt('user'),
            'image' => 'deafult.jpg',
            'member' => 'biasa',
            'profile_lengkap' => 'manusia vinson',
            'reputasi' => 2,
            'phone_number' => '08123123',
            'alamat' => 'surga',
            'isPenjual' => false
        ]);


        //6
        DB::table('users')->insert([
            'name' => 'lara',
            'email' => 'lara'.'@gmail.com',
            'password' => bcrypt('user'),
            'image' => 'deafult.jpg',
            'member' => 'biasa',
            'profile_lengkap' => 'manusia lara',
            'reputasi' => 4,
            'phone_number' => '08123123',
            'alamat' => 'surga',
            'isPenjual' => false
        ]);


        //7
        DB::table('users')->insert([
            'name' => 'jojo',
            'email' => 'jojo'.'@gmail.com',
            'password' => bcrypt('user'),
            'image' => 'deafult.jpg',
            'member' => 'biasa',
            'profile_lengkap' => 'manusia biasa',
            'reputasi' => 3,
            'phone_number' => '08123123',
            'alamat' => 'surga',
            'isPenjual' => false
        ]);
    }
}
