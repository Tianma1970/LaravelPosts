@extends('layouts/app')

@section('content')

<form method="POST" action="/motto" class="col-6">
        @csrf
    <!--Content-->

            <div class="form-group col-6">
                <h1>Create your Motto</h1>
                <label for="content">Content</label>
                <textarea id="content" name="content"
                 class="form-control" placeholder="Your Motto">{{ $user->motto }}</textarea>
            </div>

    <!--Submit-->
            <div class="form-group">
                <input type="submit" value="Create Motto"
                class="btn btn-success">
            </div>
    </form>

@endsection

