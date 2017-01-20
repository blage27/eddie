<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'order_id';
    protected $fillable = [
    	'order_id','firstname','lastname', 'email', 'category', 'brand', 
    	'model', 'phone', 'pickup_address', 'pickup_date',
    ];
}
