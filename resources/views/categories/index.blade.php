@extends('layouts/app')

@section('content')
    <div class="container mt-3">
        <h1>Categories</h1>
        <ul>
            @foreach($categories as $category)
            <li>
                <a href="/categories/{{ $category->id }}">{{ $category->name }}</a>

                @if($category->categories()->exists())
                    <ul>
                        @foreach($category->categories()->orderBy('name')->get() as $subcategory)
                        <li>
                            <a href="/categories/{{ $subcategory->id }}">{{ $subcategory->name }}</a>

                        </li>
                        @endforeach
                    </ul>


                @endif
            @endforeach
            </li>
        </ul>
    </div>

@endsection
