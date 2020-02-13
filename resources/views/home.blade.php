@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as {{ Auth::user()->name }}!<br>
                    <div class="container">
                        <div class="jumbotron mt-5">
                            @if(count(Auth::user()->posts) > 0)
                            <h2>{{Auth::user()->name}}s Posts</h2>
                            His Moto is: &nbsp; <p><i>{{Auth::user()->moto}}</i></p>

                            <ul>
                                @foreach(Auth::user()->posts as $post)
                                <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></li>

                                @endforeach
                             </ul>
                             @else
                             <p><i></i>No posts yet created<i></p><br>
                                <a href="posts/create" class="btn btn-success">Create your first post</a>
                             @endif

                        </div>
                    </div>
                     <small>{{ Auth::user()->name }} created his acount at {{ Auth::user()->created_at }}</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
