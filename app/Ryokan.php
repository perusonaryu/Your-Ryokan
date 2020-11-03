<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ryokan extends Model
{
    //
    protected $fillable = [
        'id',
        'ryokan_name',
        'ryokan_place',
        'ryokan_img',
        'ryokan_discription',
        'ryokan_url',
        'ryokan_region',
    ];
}
