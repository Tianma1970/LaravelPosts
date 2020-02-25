@extends('layouts/app')

@section('content')

<div class="container">
        <h1>Write a comment</h1>

        @include('partials/validation_errors')
        @include('partials/status')

        <form method="POST" action="/comments" class="col-6">
            @csrf

            <!--Content-->

            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content"
                 class="form-control" placeholder="Your Comment">{{ old('content') }}</textarea>
            </div>

            <!--Submit-->
            <div class="form-group">
                <input type="submit" value="Add New Comment"
                class="btn btn-primary">
            </div>

        </form>
    </div>


@endsection
