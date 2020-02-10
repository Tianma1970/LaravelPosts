@extends('layouts/app')

@section('content')
    <div class="container mt-3">
        <h1>Countries</h1>
            <ol>
            @foreach($countries as $country)

            <li>
                <a href="/countries/{{ $country->id }}">
                {{ $country->name }}</a>
            </li>

            @endforeach
            </ol>
    </div>


@endsection

