@extends('layouts/app')

@section('content')
    <div class="container mt-3">
        <h1>{{ $post->title }}</h1>
        <small>Posted by {{ $post->user->name }} in {{ $post->category->name }}</small>
        <p>{{ $post->content }}</p>

        <div class="mt-4">
            <a href="/posts/create" class="btn btn-primary">Create a new Post</a>
        </div>
    </div>


@endsection
