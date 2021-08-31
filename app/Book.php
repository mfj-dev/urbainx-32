<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Cite;
use App\Category;
use App\Review;

class Book extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Book_content','User_id','Listeman_id','Liste_id'
    ];
    
    protected $with = ['user'];
    /**
     * Get the Product that owns the Review.
     */
    public function Liste()
    {
        return $this->belongsTo('App\Liste','Liste_id');
    }
    // THIS function User TO MAKE RELATHION 
    public function User()
    {
        return $this->belongsTo('App\User','User_id');
    } 
    // THIS function Listeman_id TO MAKE RELATHION 
    public function Listeman()
    {
        return $this->belongsTo('App\User','Listeman_id');
    } 
}
