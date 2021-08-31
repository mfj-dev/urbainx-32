<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Liste;
use App\Category;
use App\Review;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ReviewRequest;

class Reviewscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {

        $this->middleware('auth');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    **/

    public function store(Request $request)
    {
        //To Review SIDE IN HOME VIEW
        Review::create([
            'Liste_id' => $request->Liste_id,
            'Reviews_title' => $request->Reviews_title,            
            'User_id' => Auth::id(),
            'Reviews_content' => $request->Reviews_content,
            'Reviews_star' => $request->Reviews_star
        ]);
        return back();
    }
}
