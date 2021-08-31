<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Liste;
use App\Category;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
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
        //To Comment SIDE IN HOME VIEW
        Comment::create([
            'Post_id' => $request->Post_id, 
            'Comment_content' => $request->Comment_content,            
            'User_id' => Auth::id()

        ]);
        return back();
    }
}
