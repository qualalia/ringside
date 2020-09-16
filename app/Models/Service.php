<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function events()
    {
        return $this->hasMany('App\Models\Event');
    }

    public function rooms()
    {
        return $this->hasMany('App\Models\Room');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\ServiceType');
    }
}
