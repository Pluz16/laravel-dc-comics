@extends('layouts.app')

@section('content')
    <div class="container mt-4" style="background-color: #f8f9fa; padding: 20px;">
        <h1>Add a New Comic</h1>
        <form method="POST" action="{{ route('comics.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="thumb">Thumbnail</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ old('thumb') }}">
                @error('thumb')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}">
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="series">Series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ old('series') }}">
                @error('series')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="sale_date">Sale Date</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
                @error('sale_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type') }}">
                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Add Comic</button>
        </form>
    </div>
@endsection


