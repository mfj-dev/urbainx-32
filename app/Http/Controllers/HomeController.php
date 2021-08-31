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

class HomeController extends Controller
{
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        
        //To Get All Categores active OUT SIDE IN HOME VIEW
        $Categores = Category::where('order', '=', '2')->orderBy('created_at','desc')->paginate(15);
        //To Get All Cities active OUT SIDE IN HOME VIEW
        $Cities = Cite::orderBy('created_at','desc')->paginate(6);
        //To Get All Liste active OUT SIDE IN HOME VIEW
        $Listes = Liste::orderBy('created_at','desc')->paginate(20);
        //To Get All Liste active OUT SIDE IN HOME VIEW
        $hotelListes = Liste::where('Category_id', '=', '6')->orderBy('created_at','desc')->paginate(20);
        //To Get Advertisement active OUT SIDE IN HOME VIEW
        $Ads_one = Advertisement::where('order', '=', '1')->get();
        //To Get Advertisement active OUT SIDE IN HOME VIEW
        $Ads_two = Advertisement::where('order', '=', '2')->get();
        //To Get Advertisement active OUT SIDE IN HOME VIEW
        $Ads_three = Advertisement::where('order', '=', '3')->get();
        //To Get Post active OUT SIDE IN HOME VIEW
        $Posts = Post::paginate(4);
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.home',compact('Categores','Cities','Listes','Ads_one','hotelListes','Posts','Ads_two','Ads_three'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.home',compact('Categores','Cities','Listes','Ads_one','hotelListes','Posts','Ads_two','Ads_three'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.home',compact('Categores','Cities','Listes','Ads_one','hotelListes','Posts','Ads_two','Ads_three')); 
        }
    }
}
