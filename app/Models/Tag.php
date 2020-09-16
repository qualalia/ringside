<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function rooms()
    {
        return $this->belongsToMany('App\Models\Room');
    }

    public function services()
    {
        return $this->belongsToMany('App\Models\Service');
    }

}
