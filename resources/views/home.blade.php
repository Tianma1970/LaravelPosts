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
                    <div class="text-center">
                        <p>You are logged in as {{ Auth::user()->name }}!
                    @if(Auth::user()->type)
                            as a {{strtoupper(Auth::user()->type)}}</p>
                            @endif
                    </div>
                    <div class="container">
                        <div class="jumbotron mt-5">
                            @if(count(Auth::user()->posts) > 0)
                            <h2 class="text-center">{{Auth::user()->name}}s Posts</h2>
                            @if(Auth::user()->user_image)
                            <div class="col-12 text-center">
                                <img src="/images/{{Auth::user()->user_image}}"width='100' height='100'>
                            </div>
                            @endif
                            <ul>
                                @foreach(Auth::user()->posts as $post)
                                <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></li>

                                @endforeach
                            </ul>
                            @if(Auth::user()->motto)
                            <p class="text-center">My Motto is:<br> {{ Auth::user()->motto }}</p>
                            @endif
                            <p class="text-center">I am from {{ Auth::user()->location }}</p>
                             @else
                             <p><i></i>No posts created yet<i></p><br>
                                <a href="posts/create" class="btn btn-success">Create your first post</a>
                             @endif

                        </div>

                        <div class="jumbotron mt-5 text-center">
                        <small>
                        Member Page: <a href="{{ url('/') }}/memberOnlyPage">Member Page</a><br>
                        Admin Page: <a href="{{ url('/') }}/adminOnlyPage">Admin Page</a><br>
                        Super Admin Page: <a href="{{ url('/') }}/superAdminOnlyPage">Super Admin Page</a><br></small>
                        </div>
                    </div>
                        <small>{{ Auth::user()->name }} created his account at {{ Auth::user()->created_at }}
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
