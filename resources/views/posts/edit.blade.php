@extends('layouts/app')

@section('content')


<!--Title-->
<div class="container col-6">
    <h1 class="text-center">Edit {{ $post->title }}</h1>
    @include('partials/validation_errors')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title"
                          name="title" value="{{ old('title') }}"
                          placeholder="Post Title"
                          class="form-control">
                    </div>
        <!--Content-->
                    <div class="form-group">
                        <label for="content"></label>
                        <textarea id="content" name="content"
                         class="form-control" placeholder="Post Content">{{ old('content') }}</textarea>
                    </div>
                    <!--Submit-->
            <div class="form-group">
                <input type="submit" value="Edit"
                class="btn btn-success">
            </div>
                </div>
        @endsection
