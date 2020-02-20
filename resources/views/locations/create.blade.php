@extends('layouts/app')

@section('content')

<form method="POST" action="/location" class="col-6">
        @csrf
    <!--Content-->

            <div class="form-group col-6">
                <h1>Add your location</h1>
                <label for="content">Content</label>
                <textarea id="content" name="content"
                 class="form-control" placeholder="Your Location">{{ $user->location }}</textarea>
            </div>

    <!--Submit-->
            <div class="form-group">
                <input type="submit" value="Add Location"
                class="btn btn-success">
            </div>
    </form>

@endsection

