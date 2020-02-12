<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class AllpostsController extends Controller
{
    public function index() {

        $post = Post::orderBy('title')->get();

        return view('Allposts/index', [
            'post'  => $post
        ])->with("status", "Unicron is coming!!1!");
    }
}
