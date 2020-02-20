@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Categories</div>
                <div class="card-body">
                    <div class="jumbotron">
                            @include('partials/status')
                            <ul>
                            @foreach($categories as $category)
                                    <li>
                                    <a href="/categories/{{ $category->id }}">{{ $category->name }}</a>
                                    <input type="checkbox" name="category[]" value="{{ $category->id }}">
                            @endforeach
                                    </li>
                                </ul>
                                <a href="/categories/create" class="btn btn-secondary">Add a new category</a>
                                <a href="/categories/" class="btn btn-danger">Delete selected category</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
@endsection
