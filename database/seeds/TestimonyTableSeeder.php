<?php

use Illuminate\Database\Seeder;

class TestimonyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('testimonis')->insert([
            'idClient' => 1,
            'isi' => 'mantap',

        ]);
    }
}
