@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <p><strong>Description:</strong> {{ $comic->description }}</p>
        <p><strong>Thumbnail:</strong> <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" height="200"></p>
        <p><strong>Price:</strong> {{ $comic->price }}</p>
        <p><strong>Series:</strong> {{ $comic->series }}</p>
        <p><strong>Sale Date:</strong> {{ $comic->sale_date }}</p>
        <p><strong>Type:</strong> {{ $comic->type }}</p>
    </div>
@endsection
