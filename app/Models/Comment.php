<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function review()
    {
        return $this->belongsTo('App\Models\Review');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
