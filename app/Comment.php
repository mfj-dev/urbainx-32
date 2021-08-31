<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Post;


class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'User_id', 'Comment_content','Post_id'
    ];

    // THIS function User TO MAKE RELATHION 
    public function User()
    {
        return $this->belongsTo('App\User','User_id');
    } 
    // THIS function Post TO MAKE RELATHION 
    public function Post()
    {
        return $this->belongsTo('App\Post','Post_id');
    } 
}
