<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post)
    {
      $posts=[
        'my-first-post'=>'hello this is my first post',
        'my-second-post'=>'hello this is my second post',
      ];

      if(!array_key_exists($post, $posts)){
         abort(404, 'message');
      }
        return view('post',['post'=>$posts[$post]]);
    }
}
