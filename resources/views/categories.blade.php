@extends('layouts.master')

@section('title', 'Все категории')

@section('content')
    @foreach($categories as $category)
        <div class="panel">
            <a href="{{ route('category', $category->code) }}">
                <img width="100px" src="https://msk.netabc.ru/files/articles_images_files/b/bb/bbo/bbow/content.jpg">
                <h2>{{ $category->name }}</h2>
            </a>
            <p>
                {{ $category->description }}
            </p>
        </div>
    @endforeach
@endsection
