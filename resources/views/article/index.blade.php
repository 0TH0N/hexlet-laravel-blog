@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2><a href="{{ route('articles.edit', $article) }}">{{ $article->name }}</a></h2>
        <div>{{ Str::limit($article->body, 200) }}</div>
        {{ Form::open([
            'url'    => route('articles.delete', $article),
            'method' => 'DELETE',
            ]) }}
        {{ Form::submit('Удалить') }}
        {{ Form::close() }}
    @endforeach
    {{ $articles->links() }}
@endsection
