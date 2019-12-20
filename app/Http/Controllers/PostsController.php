<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostsController extends Controller
{
    public function store(Request $req){
        //print_r($req->input());

         $this->validate($req,[
         'post_content' => 'required'
         ]);
            $post = new Post; 
            $post ->post_content=$req->input('post_content');
            $post ->user_id=Auth::user()->id;
            $post->name=Auth::user()->name;
            $post->save();

            return redirect()->route('showPost');
    }

    public function show() {
         $postdata = Post::all();
        return view('postview',['data'=>$postdata]);
    }
}
