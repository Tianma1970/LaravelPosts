@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create your Post</div>
                    <div class="card-body">
                        <div class="jumbotron">
                            <div class="card-title">
                                <h1>Create a new Post</h1>
                                @include('partials/validation_errors')
                                @include('partials/status')
                            </div>
                            <form method="POST" action="/posts" class="col-8">
                            @csrf

                            <!--Category-->

                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    <select id="category_id" name="category_id"                                 class="form-control">
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

                                    <!--Title-->

                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" id="title"
                                          name="title" value="{{ old('title') }}"
                                          placeholder="Post Title"
                                          class="form-control">
                                    </div>

                                    <!--Content-->

                                    <div class="form-group">
                                        <label for="content">Content</label>
                                        <textarea id="content" name="content"
                                         class="form-control" placeholder="Post Content">{{ old                     ('content') }}</textarea>
                                    </div>

                                    <!--Submit-->
                                    <div class="form-group">
                                        <input type="submit" value="Create New Post"
                                        class="btn btn-primary">
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
