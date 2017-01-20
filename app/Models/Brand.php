<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';

    protected $fillable = [
        'name',
    ];

    public function category() {

    	return $this->belongsTo(Category::class);
    }

    Public function devices() {

    	return $this->hasMany(Device::class);
    }
}
