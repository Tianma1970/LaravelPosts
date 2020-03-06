@extends('layouts/app')

@section('content')
    <div class="container mt-3 col-6">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h1>{{ $post->title }}</h1>
                    <small>Posted by {{ $post->user->name }}
                        @if ($post->category)
                            in {{ $post->category->name }}
                        @else
                            <i>uncategorized</i>
                        @endif
                        </small>
                </div>
                <div class="card-text">
                    <p>{{ $post->content }}</p>
                    <small>Posted created at {{ $post->created_at }}</small><br>

                </div>
                    {{-- @endif --}}
            </div>
        </div>
        @if(count($post->comments) > 0)
        <div class="jumbotron mt-5">
            <h4 class="text-center">Comments to {{ $post->title }}</h4>
        </div>

        <div class="accordion" id="accordionExample">
            @foreach($post->comments as $comment)
            <div class="card">
                <div class="card-header" id="commentheading{{ $comment->id }}">
                    <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#comment{{ $comment->id }}" aria-expanded="false" aria-controls="comment{{ $comment->id }}">
                        {{ $comment->author }}s comment
                </button>
                </div>

                <div id="comment{{ $comment->id }}" class="collapse" aria-labelledby="commentheading{{ $comment->id }}" data-parent="#accordionExample">
                    <div class="card-body">
                        {{ $comment->content }}<br>
                        <small>created by {{ $comment->author }} <a href="mailto:{{ $comment->email }}" target="_blank">{{ $comment->email }}</a></small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="alert-info mt-5 col-4 text-center">
            <p>no comments yet written to {{ $post->title }}</p>
        </div>
        @endif
    </div>

@endsection
