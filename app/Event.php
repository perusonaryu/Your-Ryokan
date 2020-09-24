<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'ryokan_name', 
        'event_title', 
        'event_description',
        'event_duration',
        'event_img_main',
        'event_img_sab',
        'ryokan_id'
    ];
}
