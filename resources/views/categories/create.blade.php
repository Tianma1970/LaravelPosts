@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                    <div class="card-body">
                        <div class="jumbotron">
                        <h1>Create a new Category</h1>
                        @include('partials/validation_errors')
                        <form method="POST" action="/categories">
                        @csrf
                        <div class="form-group" label for="category:name">Name
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                            placeholder="Category name" class="form-control">
                        </div>
                        <!--Submit-->
                            <div class="form-group">
                                <input type="submit" value="Add New Category"
                                class="btn btn-secondary">
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
