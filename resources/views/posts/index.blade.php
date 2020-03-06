@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Posts</div>
                <div class="card-body">
                    @include('partials/status')
                    <div class="jumbotron">
                            <ul>
                                @foreach($posts as $post)
                                <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a><br>
                                    <small>written by {{ $post->user->name }}</small>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
