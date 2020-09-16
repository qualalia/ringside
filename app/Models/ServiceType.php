<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    public const DROP_IN_CLASS = 'Drop-in Class';
    public const SESSION_CLASS = 'Session Class';
    public const PRIVATE_LESSON = 'Private Lesson';
    public const SPACE_RESERVATION = 'Space Reservation';
    public const TROUPE = 'Troupe';
}
