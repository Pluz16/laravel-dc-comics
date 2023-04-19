@extends('layouts.app')

@section('title', 'Edit Comic')

@section('content')
    <h1>Edit Comic</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('comics.update', $comic) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $comic->title) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required>{{ old('description', $comic->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="thumb">Thumbnail</label>
            <input type="url" class="form-control" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}" required>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price', $comic->price) }}" required>
        </div>

        <div class="form-group">
            <label for="series">Series</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ old('series', $comic->series) }}" required>
        </div>

        <div class="form-group bg-primary">
            <label for="sale_date">Sale Date</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}" required>
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ old('type', $comic->type) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Comic</button>
    </form>
@endsection
