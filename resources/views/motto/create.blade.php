@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create your Motto</div>
                    <div class="card-body">
                        <div class="jumbotron">
                            <div class="card-title">
                                <h1>Create your Motto</h1>
                            </div>

                            <form method="POST" action="/motto">
                                @csrf
                                <!--Content-->

                                <div class="form-group">
                                    <label for="content"><label>
                                    <textarea id="content"name="content"
                                        class="form-control" placeholder="Your Motto">{{$user->motto }}
                                    </textarea>
                                </div>

                                <!--Submit-->
                                <div class="form-group">
                                    <input type="submit"value="Create Motto" class="btn btn-success">
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
