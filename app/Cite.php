<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Cite extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','City_name_arabic','City_name_german','City_content','City_content_arabic','City_content_german','City_image','slug'
    ];
}
