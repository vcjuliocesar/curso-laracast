<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class PostsController extends Controller
{
    public function show($slug)
    {
      $post = Post::where('slug',$slug)->firstorFail();

      return view('post',['post'=>$post]);
    }
}
