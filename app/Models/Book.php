<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function favorites()
    {
        return $this->hasMany('App\Models\Favorite');
    }

    public function readings()
    {
        return $this->hasMany('App\Models\Reading');
    }
}
