@extends('layouts/app')

@section('content')
    <div class="container mt-3">
        <h1>{{ $country->name }}</h1>

        @if(count($posts) > 0)
            <div>
                <h2>Posts</h2>
                @foreach($posts as $post)
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->content }}</p>
                    <small>Posted by {{ $post->user->name }} from</small>
                        <a href="/countries/{{ $country->id }}">
                        {{ $country->name }}</a><hr>
                @endforeach
            </div>
        @else
            <p><em>Sorry, no posts yet from users in {{ $country->name }}</em></p>
        @endif
    </div>


@endsection

