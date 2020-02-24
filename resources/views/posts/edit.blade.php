@extends('layouts/app')

@section('content')


<!--Title-->
<div class="container col-6">
    <h1 class="text-center">Edit {{ $post->title }}</h1>
        <form method="POST" action="/posts/{{ $post->id }}">
            @csrf
            @method('PUT')
            @include('partials/validation_errors')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title"
                          name="title" required value="{{ old('title') ? old('title') : $post->title }}">
                    </div>
                    <!--Content-->
                    <div class="form-group">
                        <label for="content">Content</label>
                        <input type="text" name="content" class="form-control"  required value="{{ old('content') ? old('content') : $post->content }}">
                    </div>
                    <!--Submit-->
            <div class="form-group">
                <input type="submit" value="Save"
                class="btn btn-success">
            </div>
        </form>
</div>
        @endsection
