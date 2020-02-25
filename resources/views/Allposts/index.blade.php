@extends('layouts/app')

@section('content')
@include('partials/status')


<div class="container">
    <div class="card col-8">
        <h1 class="text-center mt-3">All Posts</h1>
        <div class="container mt-3">
            <div class="jumbotron col-12">
                <ul>
            @foreach($post as $post)
                    <li><a href="/Allposts/{{ $post->id }}">{{ $post->title }}</a>
                </li>
            @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
