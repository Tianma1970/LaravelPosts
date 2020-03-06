@extends('layouts/app')

@section('content')


<div class="container">
    <div class="card col-8">
        <h1 class="text-center mt-3">All Posts</h1>
        @include('partials/status')
        <div class="container mt-3">
            <div class="jumbotron col-12">
                <ul>
            @foreach($post as $post)
                    <li><a href="/Allposts/{{ $post->id }}">{{ $post->title }}</a><br>
                        <small>written by {{ $post->user->name }}</small>
                </li>
            @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
