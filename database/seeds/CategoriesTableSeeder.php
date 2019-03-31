<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
          'id' => 1,
            'cat'=>'IT'
        ]);

        DB::table('categories')->insert([
            'id' => 2,
            'cat'=>'Home'
        ]);
    }
}
