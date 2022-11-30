<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $posts = Post::get();
        return view('post.home',compact('posts'));
    }
    public function add_post(){
        return view('post.addpost');
    }

    public function store_post(Request $request){
        return $request;
    }
}
