<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PostController extends Controller
{
    public function getIndex()
    {
        $posts = App\Post::notcomplete();

        return view('posts.index',compact('posts'));

    }
    public function getShow($id)
    {
        $post = App\Post::find($id);
        return view('posts.show',compact('post'));
    }
   /* public function postAdd()
    {
        $post = App\Post::find($id);
        return view('posts.show',compact('post'));
    }*/
    public function addPost(){

        return view('posts.add');
    }
    public function addPostOk(Request $request){


    }
}
