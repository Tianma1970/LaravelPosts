@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All locations</div>
                    <div class="card-body">
                        <div class="jumbotron">
                            <ul>
                                @foreach($locations as $location)
                                    <li><a href="/locations/show/">{{ $location->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
