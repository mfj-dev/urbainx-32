<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Liste;
use App\Category;
use App\Message;
use App\Book;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MessageRequest;

class messagescontroller extends Controller
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
     */
    
    public function store(Request $request)
    {
        //To Message SIDE IN HOME VIEW
        Message::create([
            'name' => $request->name,
            'Messages' => $request->Messages,
            'Listeman_id' => $request->Listeman_id,            
            'User_id' => Auth::id(),
            'Liste_id' => $request->Liste_id
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
        // Message Delete
        $Message = Message::findOrFail($id);
        $Message->delete();
        return back();
    }
}
