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
        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-primary">Edit Comic</a>
        <form method="POST" action="{{ route('comics.destroy', $comic) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this comic?')">Delete Comic</button>
        </form>
    </div>
@endsection

