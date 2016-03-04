@extends('main')

@section('title')
    New Article
@endsection

@section('content')

    <h1>Create a New Article</h1>

    <hr/>

    @include ('errors.list')

    {!! Form::open(['url' => 'articles']) !!}
        @include ('articles.form', ['submitButtonText' => 'Add Article'])
    {!! Form::close() !!}

@endsection