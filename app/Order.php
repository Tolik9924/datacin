<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function films()
    {
    	return $this->belongsToMany(Film::class);
    }
}
