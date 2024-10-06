@extends('app')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Modifica il fumetto</h1>

        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo:</label>
                <input type="text" id="title" name="title" class="form-control"
                    value="{{ old('title', $comic->title) }}">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione:</label>
                <textarea id="description" name="description" class="form-control">{{ old('description', $comic->description) }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine (URL):</label>
                <input type="url" id="thumb" name="thumb"
                    class="form-control" value="{{ old('thumb', $comic->thumb) }}">
                @error('thumb')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo:</label>
                <input type="text" id="price" name="price"
                    class="form-control" value="{{ old('price', $comic->price) }}">
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie:</label>
                <input type="text" id="series" name="series"
                    class="form-control" value="{{ old('series', $comic->series) }}">
                @error('series')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita:</label>
                <input type="date" id="sale_date" name="sale_date"
                    class="form-control"
                    value="{{ old('sale_date', $comic->sale_date) }}">
                @error('sale_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo:</label>
                <input type="text" id="type" name="type" class="form-control"
                    value="{{ old('type', $comic->type) }}">
                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artisti:</label>
                <input type="text" id="artists" name="artists"
                    class="form-control"
                    value="{{ old('artists', $comic->artists) }}">
                @error('artists')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori:</label>
                <input type="text" id="writers" name="writers"
                    class="form-control"
                    value="{{ old('writers', $comic->writers) }}">
                @error('writers')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Modifica Fumetto</button>
        </form>
    </div>
@endsection
