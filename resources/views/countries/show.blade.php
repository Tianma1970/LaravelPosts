@extends('layouts/app')

@section('content')
    <div class="container mt-3">
        <h1>{{ $country->name }}</h1>

        @if(count($country->posts) > 0)
            <div class="jumbotron col-6">
                <h2>Posts</h2>
                @foreach($country->posts as $post)
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->content }}</p>
                    <small>Posted by {{ $post->user->name }} from
                        <a href="/countries">
                        {{ $country->name }}</small></a><hr>
                @endforeach
            </div>
        @else
            <p><em>Sorry, no posts yet from users in {{ $country->name }}</em></p>
        @endif
    </div>


@endsection

