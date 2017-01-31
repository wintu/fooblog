<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class PostsController extends Controller
{
    public function index() {
      $query = Posts::query();
      $posts = $query->orderBy('id','desc')->paginate(5);
      return view('posts.index')->with('posts',$posts);
    }
}
