@extends('layouts/app')

@section('content')
<div class="container">
<div class="card col-8">
        <h1 class="text-center mt-3">All comments</h1>
        <div class="container mt-3">
            <div class="jumbotron col-12">
                <ul>
            @foreach($comments as $comment)
                    <li>{{ $comment->content }}<br>
                        @if(Auth::user())
                        <i>commented post:&nbsp;</i><a href="/posts/{{$comment->post->id}}">{{ $comment->post->title }}</a><br>
                        @endif
                    </li>
            @endforeach

            @guest
            <div class="alert-danger col-9 mt-5 text-center">
                create an account to show which posts are commented
            </div>
            @endguest

                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
