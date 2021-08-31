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
use App\Favourite;
use App\Message;
use App\Book;

class Usercontroller extends Controller
{

    public function __construct() {

        $this->middleware('auth');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        // this query to get USER SINGLE page //
        $User = User::where('name', '=', $name)->firstOrFail();
        // this query to get ALL Listes USER SINGLE page //
        $Listes = Liste::where('User_id','=', $User->id)->paginate(6);
        //To Get Messages OUT SIDE IN SHOW VIEW
        $Messages = $User->Messages;
        //To Get Books OUT SIDE IN SHOW VIEW
        $Books = $User->Books;
        //To Get Favourites OUT SIDE IN SHOW VIEW
        $Favourites = $User->Favourites;
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.Users.show',compact('User','Cities','Listes','Ads_one','hotelListes','Posts','Ads_two','Ads_three','Favourites','Messages','Books'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.Users.show',compact('User','Cities','Listes','Ads_one','hotelListes','Posts','Ads_two','Ads_three','Favourites','Messages','Books'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.Users.show',compact('User','Cities','Listes','Ads_one','hotelListes','Posts','Ads_two','Ads_three','Favourites','Messages','Books')); 
        }
    }

   /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($name)
    {
        // this query to get USER edit page //
        $User = User::where('name', '=', $name)->firstOrFail();
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return view('arabic.Users.edit',compact('User'));
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return view('German.Users.edit',compact('User'));   
        }
        // To Get Change The Language Arabic or English or German
        else{
           return view('english.Users.edit',compact('User')); 
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $name
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $name)
    {

        request()->validate([

         'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);     
        // THIS FUNCTION update User IN PAGE User //
        $User = User::where('name', '=', $name)->firstOrFail();
        // THIS INPUT RETURN FROM UPDATE PAGE USER //
        $User->name = $request->input('name');
        $User->email = $request->input('email');
        $User->password = $request->input('password');
        $User->dec = $request->input('dec');
        $User->dec_arabic = $request->input('dec_arabic');
        $User->dec_german = $request->input('dec_german');
        $User->Phone = $request->input('Phone');
        $User->Address = $request->input('Address');
        $User->role_id = $request->input('role_id');
        // THIS FUNCTION UPDATE NEW IMAGE USER IN PAGE USER UPDATE //
         if ($request->file('avatar')){  
          $file = $request->file('avatar');
          $date = date('FY');
          $destinationPath = 'storage/users/'.$date.'/';
          $viewimage = 'users/'.$date.'/';         
          $filename = $viewimage.$file->getClientOriginalName();
          $file->move($destinationPath, $filename); 
          $User->avatar = $filename;
          // THIS TO SAVE  USER UPDATE //
          $User->save();
       }else{
          // THIS TO SAVE  USER UPDATE //
          $User->save();
       }
        // To Get Change The Language Arabic or English or German
        if (Session::get('lang') == 'arabic') {
           return back()->with('Messagge', 'User'); 
        }
        // To Get Change The Language Arabic or English or German
        elseif (Session::get('lang') == 'German'){
           return back()->with('Messagge', 'User');    
        }
        // To Get Change The Language Arabic or English or German
        else{
           return back()->with('Messagge', 'User');  
        } 
    }
}
