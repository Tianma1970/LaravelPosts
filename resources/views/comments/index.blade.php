@extends('layouts/app')

@section('content')

<ul>
@foreach($comments as $comment)
    <li>{{ $comment->content }}</li>

@endforeach
</ul>


@endsection
