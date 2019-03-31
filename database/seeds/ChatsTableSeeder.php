<?php

use Illuminate\Database\Seeder;

class ChatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('chats')->insert([
            'idClient1' => 2,
            'nama'=> 'jojo',
            'isi' => 'test',
            'status' => 0,
        ]);
    }
}
