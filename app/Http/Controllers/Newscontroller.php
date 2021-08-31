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
use App\Review;


class Newscontroller extends Controller
{
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($slug)
    {
        //To Get All Post OUT SIDE IN HOME VIEW
        $Post = Post::where('slug','=',$slug)->firstOrFail();
        //To Get Comments Product OUT SIDE IN SHOW VIEW
        $Comments = $Post->Comments;
        //To Get Posts OUT SIDE IN SHOW VIEW
        $Posts = Post::paginate(15);
        //To Get Advertisement active OUT SIDE IN HOME VIEW
        $Ads_eat = Advertisement::where('order', '=', '8')->get();
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.News.show',compact('Post','Posts','Comments','Ads_eat'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.News.show',compact('Post','Posts','Comments','Ads_eat'));  
        }
        // To Get Change The Language Arabic or English or German
        else{
          return view('english.News.show',compact('Post','Posts','Comments','Ads_eat')); 
        }
    }

}
