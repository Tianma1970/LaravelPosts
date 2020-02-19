@extends('layouts/app')

@section('content')
@include('partials/status')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Posts</div>
                    <div class="card-body">
                        <div class="jumbotron">
                            <ul>
                                @foreach($posts as $post)
                                <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
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
