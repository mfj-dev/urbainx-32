<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Liste;
use App\Cite;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'parent_id', 'order', 'name','slug','image','name_arabic','name_German'
    ];

     // THIS function Liste TO MAKE RELATHION WITH Department
    public function Listes()
    {
        return $this->hasMany('App\Liste');
    }
}
