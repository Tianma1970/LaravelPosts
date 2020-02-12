@extends('layouts/app')

@section('content')
@include('partials/status')

<div class="container mt-3">
    <h1>All Posts from {{ Auth::user()->name }}</h1>

    <ul>
        @foreach(Auth::user()->posts as $post)
            <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></li>

        @endforeach
    </ul>
</div>

@endsection
