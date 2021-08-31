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

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //To Get All Cities active OUT SIDE IN HOME VIEW
        $Cities = Cite::orderBy('created_at','desc')->paginate(20);
        //To Get Advertisement active OUT SIDE IN HOME VIEW
        $Ads_four = Advertisement::where('order', '=', '4')->get();
        //To Get Advertisement active OUT SIDE IN HOME VIEW
        $Ads_five = Advertisement::where('order', '=', '5')->get();
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.Cities.index',compact('Cities','Ads_four','Ads_five'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.Cities.index',compact('Cities','Ads_four','Ads_five'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.Cities.index',compact('Cities','Ads_four','Ads_five')); 
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //To Get All Cities active OUT SIDE IN HOME VIEW
        $City  = Cite::where('slug','=',$slug)->firstOrFail();
        //To Get All Listes OUT SIDE IN HOME VIEW
        $Listes = Liste::where('cities_id','=', $City->id)->paginate(10);
        //To Get Advertisement active OUT SIDE IN HOME VIEW
        $Ads_six = Advertisement::where('order', '=', '6')->get();
        //To Get Advertisement active OUT SIDE IN HOME VIEW
        $Ads_seven = Advertisement::where('order', '=', '7')->get();
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.Cities.show',compact('City','Ads_six','Ads_seven','Listes'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.Cities.show',compact('City','Ads_six','Ads_seven','Listes'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.Cities.show',compact('City','Ads_six','Ads_seven','Listes')); 
        }
    }

}
