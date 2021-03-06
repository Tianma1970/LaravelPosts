@extends('layouts/app')

@section('content')
    <div class="container mt-3 col-6">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    @include('partials/status')
                    <h1>{{ $post->title }}</h1>
                    <small>Posted by {{ $post->user->name }} in
                        @if($post->category)
                        <a href="/categories/{{ $post->category_id }}"> {{ $post->category->name }}</a>
                        @else
                        <i>uncategorized</i>
                        @endif
                    </small>
                </div>
                <div class="card-text">
                    <p>{{ $post->content }}</p>
                    <small>Posted created at {{ $post->created_at }}</small><br>
                    @if(Auth::user()->type === 'super_admin')
                        <a href="/comments/create" class="btn btn-info mt-3">write a comment</a>
                    @endif
                    @if(Auth::user()->id === $post->user_id)
                    <div class="mt-4">
                        <a href="/posts/{{ $post->id }}/edit" class="btn btn-success">Edit Post</a>
                    </div>
                    <div class="mt-4">
                        <a href="/categories/create" class="btn btn-success">Add category</a>
                    </div>
                    <div class="mt-4">
                        <form method="POST" action="/posts/{{ $post->id }}">
                            @csrf
                            @method("DELETE")
                            <input type="submit" value="Delete Post"    class="btn         btn-danger">
                        </form>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
