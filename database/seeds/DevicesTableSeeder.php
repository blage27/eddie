<?php

use Illuminate\Database\Seeder;
use App\Models\Device;

class DevicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $device = new Device();
        $device->brand_id = 1;
        $device->model = 'Mac Book Pro';
        $device->save();

        $device = new Device();
        $device->brand_id = 1;
        $device->model = 'Mac Book Air';
        $device->save();
    }
}
