<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    protected $fillable = [
        'name',
        'email',
        'phone',
        'visit_duration',
        'room',
        'ryokan_id',
    ];
}
