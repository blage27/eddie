<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(CategoriesTableSeeder::class);
        //$this->call(BrandsTableSeeder::class);
        $this->call(DevicesTableSeeder::class);
    }
}
