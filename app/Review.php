<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Liste;
use App\Category;

class Review extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Liste_id','User_id','Reviews_title','Reviews_content','Reviews_star'
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
}
