@extends('layouts/app')

@section('content')
    <div class="container mt-3 col-6">
        <h1>{{ $post->title }}</h1>
        <small>Posted by {{ $post->user->name }} in {{ $post->category->name }}</small>
        <p>{{ $post->content }}</p>

        <div class="mt-4">
            <a href="/posts/create" class="btn btn-primary">Create a new Post</a>
        </div>
        <div class="mt-4">
            <form method="POST" action="/posts/{{ $post->id }}">
                @csrf
                @method("DELETE")
                <input type="submit" value="Delete Post" class="btn btn-danger">
            </form>
        </div>
    </div>


@endsection
