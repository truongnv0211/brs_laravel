<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'content',
    ];

    public function books()
    {
        return $this->hasMany('App\Models\Book');
    }
}
