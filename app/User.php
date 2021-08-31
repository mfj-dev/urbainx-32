<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Liste;
use App\Cite;
use App\Review;
use App\Favourite;
use App\Message;
use App\Book;
use App\Comment;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar','role_id','dec','dec_arabic','dec_german','Phone','Address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // THIS function Liste TO MAKE RELATHION WITH Department
    public function Listes()
    {
        return $this->hasMany('App\Liste');
    }
   
     // THIS function Cite TO MAKE RELATHION WITH Cite
     public function Cite()
    {
        return $this->belongsTo('App\Cite');
    }
    
    // THIS function Reviews TO MAKE RELATHION WITH USERS
    public function Reviews()
    {
        return $this->hasMany('App\Review');
    }

    // THIS function Comments TO MAKE RELATHION WITH USERS
    public function Comments()
    {
        return $this->hasMany('App\Comment');
    }

    // THIS function Wishlist TO MAKE RELATHION WITH Product
    public function Favourites()
    {
        return $this->hasMany('App\Favourite');
    } 
    // THIS function Message TO MAKE RELATHION WITH Product
    public function Messages()
    {
        return $this->hasMany('App\Message','Listeman_id');
    } 
    // THIS function Books TO MAKE RELATHION WITH Product
    public function Books()
    {
        return $this->hasMany('App\Book','Listeman_id');
    } 
}
