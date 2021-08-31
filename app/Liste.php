<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Cite;
use App\Category;
use App\Review;
use App\Favourite;
use App\Message;
use App\Book;

class Liste extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'List_name', 'List_name_arabic', 'List_name_german','Category_id','User_id','cities_id','Latitude','Longitude','Phone','Address','Website','description','description_arabic','description_german','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Price_Range','Price_From','Price_To','Twitter','Facebook','Linkedin','google_plus','youtube','instagram','Images','slug','Popular','Ads','verified','active'
    ];

    // THIS function Cite TO MAKE RELATHION WITH Cite
     public function Cite()
    {
        return $this->belongsTo('App\Cite','cities_id');
    }
     // THIS function User TO MAKE RELATHION WITH User
     public function User()
    {
        return $this->belongsTo('App\User','User_id');
    }
     // THIS function Category TO MAKE RELATHION WITH Category
     public function Category()
    {
        return $this->belongsTo('App\Category','Category_id');
    }
    // THIS function Reviews TO MAKE RELATHION WITH USERS
    public function Reviews()
    {
        return $this->hasMany('App\Review');
    }

     // THIS function Wishlist TO MAKE RELATHION WITH Product
    public function Favourites()
    {
        return $this->hasMany('App\Favourite');
    } 
    // THIS function Messages TO MAKE RELATHION WITH Product
    public function Messages()
    {
        return $this->hasMany('App\Message');
    } 

    // THIS function Books TO MAKE RELATHION WITH Product
    public function Books()
    {
        return $this->hasMany('App\Book');
    } 
}
