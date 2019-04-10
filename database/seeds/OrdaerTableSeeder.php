<?php

use Illuminate\Database\Seeder;

class OrdaerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('orders')->insert([
            'idClient' => 1,
            'idJasa' => 1,
            'status' => 0,
        ]);
     
        DB::table('orders')->insert([
            'idClient' => 1,
            'idJasa' => 1,
            'status' => 0,
        ]);

        DB::table('orders')->insert([
            'idClient' => 5,
            'idJasa' => 2,
            'status' => 0,
        ]);
    }
}
