@extends('layouts/app')

@section('content')

<div class="container mt-3 col-6">
    <h1>Posts from Category {{ $category->name }} </h1>
            @if(count($category->posts) > 0)
            @foreach($category->posts as $post)
            <div class="card">
                <div class="card-group">
                    <div class="row">
                            <div class="card-body">
                            <div class="card-title">
                                <h3>{{ $post->title }}</h3>
                            </div>
                            <div class="card-text">
                                <p>{{ $post->content }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <a href="/categories" class="btn btn-secondary">Back to Categories</a>
            @else
            No post for category {{ $category->name }} found<br>
            <a href="/posts/create" class="btn btn-success">Add Post</a>
            @endif


</div>

@endsection
