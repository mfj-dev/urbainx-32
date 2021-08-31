<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Advertisement extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Adv_link','Adv_image','order'
    ];
}
