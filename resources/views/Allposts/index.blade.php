@extends('layouts/app')

@section('content')
@include('partials/status')

<div class="container mt-3">
    <h1>All Posts</h1>

    <ul>
        @foreach($post as $post)
            <li><a href="/Allposts/{{ $post->id }}">{{ $post->title }}</a>
            </li>

        @endforeach
    </ul>
</div>

@endsection
