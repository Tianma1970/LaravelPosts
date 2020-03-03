@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <div class="jumbotron">
                            <form method="POST" action="/location">
                            @csrf
                            <!--Content-->

                            <div class="form-group">
                                <h1>Add your location</h1>
                                <label for="content">Content</label>
                                <textarea id="content" name="content"
                                 class="form-control" placeholder="Your Location">{{$user->location }}</textarea>
                            </div>

                            <!--Submit-->
                            <div class="form-group">
                                <input type="submit" value="Add Location"
                                class="btn btn-success">
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

