<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
     protected $fillable = [
        'name'
    ];
 public function getNameAttribute($value)
    {
        return ucwords($value);
    }

   public  function blogs(){
        return $this->hasMany(blog::class);
    }

}
