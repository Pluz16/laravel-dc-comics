@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Comics</h1>
        <ul>
            @foreach ($comics as $comic)
                <li>
                    <h2>{{ $comic->title }}</h2>
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }} cover">
                    <p>{{ $comic->description }}</p>
                    <p>Price: {{ $comic->price }}</p>
                    <p>Series: {{ $comic->series }}</p>
                    <p>Sale Date: {{ $comic->sale_date }}</p>
                    <p>Type: {{ $comic->type }}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
