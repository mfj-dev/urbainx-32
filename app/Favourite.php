<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Liste;
use App\User;

class Favourite extends Model
{
    protected $fillable = [
        'User_id','Liste_id'
    ];

     // THIS function User TO MAKE RELATHION WITH User
     public function User()
    {
        return $this->belongsTo('App\User','User_id');
    }
     // THIS function Liste TO MAKE RELATHION WITH Department
    public function Liste()
    {
        return $this->belongsTo('App\Liste','Liste_id');
    }
}
