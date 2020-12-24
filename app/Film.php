<?php

namespace App;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    /*public function getCategory()
    {
    	return Category::find($this->category_id);
    }*/

     use Translatable;

     protected $fillable = ['code', 'name', 'mark', 'category_id', 'description', 'image','name_en','description_en','hit','new','recommend'];

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    /*public function setNewAttribute($value)
    {
        $this->attributes['new'] = $value == 'on' ? 1 : 0;
    }

     public function setHitAttribute($value)
    {
        $this->attributes['hit'] = $value == 'on' ? 1 : 0;
    }

     public function setRecommendAttribute($value)
    {
        $this->attributes['recommend'] = $value == 'on' ? 1 : 0;
    }*/

    public function isNew()
    {
        return $this->new === 1;
    }

     public function isHit()
    {
        return $this->hit === 1;
    }

     public function isRecommend()
    {
        return $this->recommend === 1;
    }
}
