<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Comments;
class PostController extends Controller
{
    public function index()
    {
     $posts=Posts::all();
      return view('welcome',['posts'=>$posts]);
    }


    public function viewDetials($id)
    {

      $post = Posts::find($id);

      return view('postDetials',['post'=>$post]);

    
    }
}
