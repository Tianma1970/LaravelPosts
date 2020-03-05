@extends('layouts/app')

@section('content')
<div class="container">
<div class="card col-8">
        <h1 class="text-center mt-3">All comments</h1>
        <div class="container mt-3">
            <div class="jumbotron col-12">
                <ul>
            @foreach($comments as $comment)
                    <li>{{ $comment->content }}<br><i>commented post:&nbsp;</i><a href="{{$comment->post->id}}">{{ $comment->post->title }}</a><br>
                    </li>
            @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
