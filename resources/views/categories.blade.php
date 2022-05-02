@extends('master')

@section('title', 'Все категории')

@section('content')
    <div class="starter-template">
        @foreach($categories as $category)
            <div class="panel">
                <a href="{{ route('category', $category->code) }}">
                    <img width="60px" src="https://images.fixjeiphone.nl/wp-content/uploads/2021/06/Refurbished-iPhone-X-space-grey-1.png">
                    <h2>{{ $category->name }}</h2>
                </a>
                <p>
                    {{ $category->description }}
                </p>
            </div>
        @endforeach
    </div>
@endsection
