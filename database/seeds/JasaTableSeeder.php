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

        DB::table('jasas')->insert([
            'user_id' => 3,
             'category_id' => 1,
             'jasaName' => 'free sek',
             'harga' => 10000
         ]);

         DB::table('jasas')->insert([
            'user_id' => 4,
             'category_id' => 1,
             'jasaName' => 'sedot wc',
             'harga' => 150000
         ]);

         DB::table('jasas')->insert([
            'user_id' => 3,
             'category_id' => 1,
             'jasaName' => 'sewa tuyul',
             'harga' => 200000
         ]);

         DB::table('jasas')->insert([
            'user_id' => 7,
             'category_id' => 1,
             'jasaName' => 'cukur online',
             'harga' => 20000
         ]);


    }
}
