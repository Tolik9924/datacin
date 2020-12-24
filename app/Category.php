<?php

namespace App;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Translatable;

    protected $fillable = ['code', 'name', 'description', 'image','name_en','description_en'];

    public function films()
    {
    	return $this->hasMany(Film::class);
    }
}
