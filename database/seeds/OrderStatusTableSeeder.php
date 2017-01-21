<?php

use Illuminate\Database\Seeder;
use App\Models\OrderStatus;

class OrderStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new OrderStatus;
        $status->name = 'Pending';
        $status->save();

        $status = new OrderStatus;
        $status->name = 'Work In Progress';
        $status->save();

        $status = new OrderStatus;
        $status->name = 'Repaired';
        $status->save();

        $status = new OrderStatus;
        $status->name = 'Delivered';
        $status->save();
    }
}
