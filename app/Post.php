<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;


class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'author_id','category_id','title','seo_title','excerpt','body','image','slug','meta_description','meta_keywords','status','featured','title_arabic','title_german','body_arabic','body_german'
    ];

    // THIS function Comments TO MAKE RELATHION WITH USERS
    public function Comments()
    {
        return $this->hasMany('App\Comment');
    }
}
