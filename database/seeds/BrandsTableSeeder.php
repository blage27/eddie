<?php

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$brand = new Brand();
       	$brand->category_id = 1;
       	$brand->name = 'Apple';
       	$brand->save();
    }
}
