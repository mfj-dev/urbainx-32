<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use App\Category;
use App\Cite;
use App\Liste;
use App\Post;
use App\Advertisement;

class Categorescontroller extends Controller
{
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($slug)
    {
        //To Get All Category OUT SIDE IN HOME VIEW
        $Category = Category::where('slug', '=', $slug)->firstOrFail();
        //To Get All Listes OUT SIDE IN HOME VIEW
        $Listes = Liste::where('Category_id','=', $Category->id)->paginate(10);
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.Categores.show',compact('Category','Listes'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.Categores.show',compact('Category','Listes'));  
        }
        // To Get Change The Language Arabic or English or German
        else{
          return view('english.Categores.show',compact('Category','Listes')); 
        }
    }

}
