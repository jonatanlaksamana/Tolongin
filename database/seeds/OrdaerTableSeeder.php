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
        ]);
     
    }
}
