@extends('layouts/app')

@section('content')


<!--Title-->
<div class="container col-6">
    <h1 class="text-center">Edit {{ $post->title }}</h1>
        <form method="POST" action="/posts/{{ $post->id }}">
            @csrf
            @method('PUT')
            @include('partials/validation_errors')

            <!--Category-->

            <div class="form-group">
                <label for="category_id">Category</label>
                <select id="category_id" name="category_id" class="form-control">
                     <option value="">Please select a category</option>
                     @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            @if($category->id == old('category_id'))
                            selected
                            @endif
                            >
                                {{ $category->name }}
                        </option>
                     @endforeach
                 </select>
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title"name="title" required value="{{ old('title') ? old('title') : $post->title }}">
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
