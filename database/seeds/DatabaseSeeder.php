<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ChatsTableSeeder::class);
        $this->call(JasaTableSeeder::class);
//        $this->call(OrdaerTableSeeder::class);
        $this->call(TestimonyTableSeeder::class);
    }
}
