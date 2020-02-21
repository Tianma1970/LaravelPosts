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
                            <form method="POST" action="/categories/delete">
                            @csrf

                                @foreach($categories as $category)
                                        <div>

                                            <input type="checkbox" name="ids[]" value="{{ $category->id }}">
                                            <a href="/categories/{{ $category->id }}">{{ $category->name }}</a>
                                        </div>
                                @endforeach

                                    <a href="/categories/create" class="btn btn-secondary">Add a new category</a>

                                    <input class="btn btn-danger" type="submit" value="Delete selected category" />

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
