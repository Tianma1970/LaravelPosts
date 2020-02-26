<?php

namespace App\Http\Controllers;

use Auth;
use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Validation
     */
    protected $validationRules = [
        'title'     => 'required|min:3',
        'content'   => 'required|min:8'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('title')->get();
        return view('/posts/index', [
            'posts'    => $posts

            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::guest()) {
            abort(403);
        }

        $categories = Category::orderBy('name')->get();
        return view('posts/create', [
            'categories'    => $categories,

            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'category_id'   => 'required',
            'title'         => 'required',
            'content'       => 'required',
        ]);

        $validData['user_id'] = Auth::id();

        $post = Post::create($validData);

        return redirect('/posts/' . $post->id)->with('status', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, Category $category)
    {
        return view('posts/show', [
            'post' => $post,
            'category' => $category
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, Category $category)
    {
        // dd('edit me');
        $categories = Category::where('parent_id', 0)->orderBy('name')->get();

        return view('/posts/edit', [
            'post'      => $post,
            'categories'  => $categories
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validData = $request->validate($this->validationRules);

        $post->title = $validData['title'];
        $post->content = $validData['content'];

        $post->save();

        return redirect('/posts/' . $post->id)->with('status', 'Post edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //dd("Delete me");
        $post->delete();

        return redirect('/posts')->with('status', 'Post deleted successfully');
    }
}
