@extends('layouts/app')

@section('content')

<div class="container mt-3 col-6">
    <h1>Posts from Category {{ $category->name }} </h1>
    @if(count($category->posts) > 0)
        @foreach($category->posts as $post)
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
        @endforeach
    @endif


</div>

@endsection
