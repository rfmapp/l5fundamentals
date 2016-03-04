@extends('main')

@section('title')
    {{ $article->title }}
@endsection

@section('content')
    <h1>{{ $article->title }}</h1>

    <article>
        {{ $article->body }}
    </article>
@endsection