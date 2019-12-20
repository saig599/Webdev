<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use Auth;

class CommentsController extends Controller
{
    public function store(Request $req){
        //print_r($req->input());
         $this->validate($req,[
         'comment_content' => 'required'
         ]);

            $comment = new Comment; 
            $comment->comment_content=$req->input('comment_content');
            $comment->user_id=Auth::user()->id;
            $comment->name=Auth::user()->name;
            $comment->save();

            return redirect()->route('showPost');
    }

     public function show() {
        $commentdata = Comment::all();
       return view('postview',['data'=>$commentdata]);
    }
    

}
