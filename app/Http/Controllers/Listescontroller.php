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
use Validator;
class Listescontroller extends Controller
{


  public function __construct() {

        $this->middleware('auth');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       //To Get All Categores active OUT SIDE IN HOME VIEW
      $Categores = Category::where('order', '=', '2')->orderBy('created_at','desc')->get();
        //To Get All Cities active OUT SIDE IN HOME VIEW
      $Cities = Cite::orderBy('created_at','desc')->get();
        //To Get All Listsmax OUT SIDE IN HOME VIEW
      $Listsmax = Liste::max('id');
        // To Get Change The Language Arabic or English or German
      if (Session::get('lang') == 'arabic') {
       return view('arabic.Listes.create',compact('Categores','Cities','Listsmax'));
     }
        // To Get Change The Language Arabic or English or German
     elseif (Session::get('lang') == 'German'){
       return view('German.Listes.create',compact('Categores','Cities','Listsmax'));  
     }
        // To Get Change The Language Arabic or English or German
     else{
      return view('english.Listes.create',compact('Categores','Cities','Listsmax')); 
    }
  }
     
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        //validate
        $this->validate($request, [
            'Images.*' => 'mimes:jpeg,png,jpg,gif,svg', //only allow this type extension file.
        ]);
        
      if (Auth::user()->role_id == '3' ) {
        # code.Liste. INSERT :) METEORS.

        $Liste = new Liste;
        $Liste->User_id = Auth::id();
        $Liste->List_name = $request->input('List_name');
        $Liste->List_name_arabic = $request->input('List_name_arabic');
        $Liste->List_name_german = $request->input('List_name_german');
        $Liste->Category_id = $request->input('Category_id');
        $Liste->cities_id = $request->input('cities_id');
        $Liste->Latitude = $request->input('Latitude');
        $Liste->Longitude = $request->input('Longitude');
        $Liste->Phone = $request->input('Phone');
        $Liste->Address = $request->input('Address');
        $Liste->Website = $request->input('Website');
        $Liste->description = $request->input('description');
        $Liste->description_arabic = $request->input('description_arabic');
        $Liste->description_german = $request->input('description_german');
        $Liste->Monday = $request->input('Monday');
        $Liste->Tuesday = $request->input('Tuesday');
        $Liste->Wednesday = $request->input('Wednesday');
        $Liste->Thursday = $request->input('Thursday');
        $Liste->Friday = $request->input('Friday');
        $Liste->Saturday = $request->input('Saturday');
        $Liste->Price_Range = $request->input('Price_Range');
        $Liste->Price_From = $request->input('Price_From');
        $Liste->Price_To = $request->input('Price_To');
        $Liste->Twitter = $request->input('Twitter');
        $Liste->Facebook = $request->input('Facebook');
        $Liste->Linkedin = $request->input('Linkedin');
        $Liste->google_plus = $request->input('google_plus');
        $Liste->youtube = $request->input('youtube');
        $Liste->instagram = $request->input('instagram');
        $Liste->Popular = $request->input('Popular');
        $Liste->slug  = $request->input('slug');
        $Liste->Ads = $request->input('Ads');
        $Liste->verified = $request->input('verified');
        $Liste->active = $request->input('active');
        $Liste->Sunday = $request->input('Sunday');
        $allImages = [];//To Get user Portfolio
         if($request->hasFile('Images')) {
           foreach($request->file('Images') as $file) { 
            $date = date('FY');
            $destinationPath = 'storage/listes/'.$date.'/';
            $viewimage = 'listes/'.$date.'/';         
            $filename = $viewimage.$file->getClientOriginalName();
            $file->move($destinationPath, $filename); 
            array_push($allImages, $filename);
          }
          $Liste->Images = json_encode($allImages);  
          
          $Liste->save();
        }

        return back()->with('Liste','Liste');

      }else{
        return back();
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //To Get All Liste OUT SIDE IN HOME VIEW
      $Liste = Liste::where('slug','=',$slug)->firstOrFail();
        //To Get Reviews  OUT SIDE IN SHOW VIEW
      $Reviews = $Liste->Reviews;
        // To Get Change The Language Arabic or English or German
      if (Session::get('lang') == 'arabic') {
       return view('arabic.Listes.show',compact('Liste','Reviews'));
     }
        // To Get Change The Language Arabic or English or German
     elseif (Session::get('lang') == 'German'){
       return view('German.Listes.show',compact('Liste','Reviews'));  
     }
        // To Get Change The Language Arabic or English or German
     else{
      return view('english.Listes.show',compact('Liste','Reviews')); 
    }
  }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
       // THIS FUNCTION update User IN PAGE User //
      $Liste = Liste::where('slug', '=', $slug)->firstOrFail();
       //To Get All Categores active OUT SIDE IN HOME VIEW
      $Categores = Category::where('order', '=', '2')->orderBy('created_at','desc')->get();
        //To Get All Cities active OUT SIDE IN HOME VIEW
      $Cities = Cite::orderBy('created_at','desc')->get();
        //To Get Listsmax OUT SIDE IN HOME VIEW
      $Listsmax = Liste::max('id');
        // To Get Change The Language Arabic or English or German
      if (Session::get('lang') == 'arabic') {
       return view('arabic.Listes.edit',compact('Categores','Cities','Listsmax','Liste'));
     }
        // To Get Change The Language Arabic or English or German
     elseif (Session::get('lang') == 'German'){
       return view('German.Listes.edit',compact('Categores','Cities','Listsmax','Liste'));  
     }
        // To Get Change The Language Arabic or English or German
     else{
      return view('english.Listes.edit',compact('Categores','Cities','Listsmax','Liste')); 
    }
  }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
      if (Auth::user()->role_id == '3' ) {
        // THIS FUNCTION update User IN PAGE User //
        $Liste = Liste::where('slug', '=', $slug)->firstOrFail();
        request()->validate([

         'Images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

       ]);
        # code.Liste. INSERT :) METEORS.
        $Liste->User_id = Auth::id();
        $Liste->List_name = $request->input('List_name');
        $Liste->List_name_arabic = $request->input('List_name_arabic');
        $Liste->List_name_german = $request->input('List_name_german');
        $Liste->Category_id = $request->input('Category_id');
        $Liste->cities_id = $request->input('cities_id');
        $Liste->Latitude = $request->input('Latitude');
        $Liste->Longitude = $request->input('Longitude');
        $Liste->Phone = $request->input('Phone');
        $Liste->Address = $request->input('Address');
        $Liste->Website = $request->input('Website');
        $Liste->description = $request->input('description');
        $Liste->description_arabic = $request->input('description_arabic');
        $Liste->description_german = $request->input('description_german');
        $Liste->Monday = $request->input('Monday');
        $Liste->Tuesday = $request->input('Tuesday');
        $Liste->Wednesday = $request->input('Wednesday');
        $Liste->Thursday = $request->input('Thursday');
        $Liste->Friday = $request->input('Friday');
        $Liste->Saturday = $request->input('Saturday');
        $Liste->Price_Range = $request->input('Price_Range');
        $Liste->Price_From = $request->input('Price_From');
        $Liste->Price_To = $request->input('Price_To');
        $Liste->Twitter = $request->input('Twitter');
        $Liste->Facebook = $request->input('Facebook');
        $Liste->Linkedin = $request->input('Linkedin');
        $Liste->google_plus = $request->input('google_plus');
        $Liste->youtube = $request->input('youtube');
        $Liste->instagram = $request->input('instagram');
        $Liste->Popular = $request->input('Popular');
        $Liste->slug  = $request->input('slug');
        $Liste->Ads = $request->input('Ads');
        $Liste->verified = $request->input('verified');
        $Liste->active = $request->input('active');
        $Liste->Sunday = $request->input('Sunday');
         $allImages = [];//To Get user Portfolio
         if($request->hasFile('Images')) {
           foreach($request->file('Images') as $file) { 
            $date = date('FY');
            $destinationPath = 'storage/listes/'.$date.'/';
            $viewimage = 'listes/'.$date.'/';         
            $filename = $viewimage.$file->getClientOriginalName();
            $file->move($destinationPath, $filename); 
            array_push($allImages, $filename);
          }
          $Liste->Images = json_encode($allImages);  
          $Liste->save();
        }
        $Liste->save();
        return back()->with('Liste','Liste');

      }else{
        return back();
      }
    }
  }
