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
use DB;


class SearchController extends Controller
{


            /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
            public function search()
        {
           // Gets the query string from our form submission 
           $search = \Request::get('search');
           // Gets the query string from our form submission 
           $search_cat = \Request::get('search');
           // Searches for name titles //
           $Listes = Liste::where('cities_id', 'LIKE', '%' . $search . '%')->orWhere('Category_id', 'LIKE', '%' . $search_cat . '%')->get();
           // To Get Change The Language Arabic or English or German
            if (Session::get('lang') == 'arabic') {
               return view('arabic.search', compact('search','Listes','search_cat'));
            }
            // To Get Change The Language Arabic or English or German
            elseif (Session::get('lang') == 'German'){
               return view('German.search',compact('search','Listes','search_cat'));   
            }
            // To Get Change The Language Arabic or English or German
            else{
               return view('english.search',compact('search','Listes','search_cat')); 
            }

    }
}
