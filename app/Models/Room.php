<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function events()
    {
        return $this->hasMany('App\Models\Event');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }
}
