<?php

use Illuminate\Database\Seeder;

class JasaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('jasas')->insert([
           'user_id' => 1,
            'category_id' => 1,
            'jasaName' => 'code php',
            'harga' => 500000
        ]);
    }
}
