<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Liste;
use App\Category;
use App\Review;
use App\Favourite;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\FavouriteRequest;

class Favouritecontroller extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //To Favourite SIDE IN HOME VIEW
        Favourite::create([
            'Liste_id' => $request->Liste_id,           
            'User_id' => Auth::id()
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         // Favourite delete
        $Favourite = Favourite::findOrFail($id);
        $Favourite->delete();
        return back();
    }
}
