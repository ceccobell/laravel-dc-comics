@extends('app')

@section('content')
    <div class="container py-5 text-light">
        <h1 class="mb-4 text-dark">Aggiungi un nuovo fumetto</h1>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label text-dark">Titolo:</label>
                <input type="text" id="title" name="title" class="form-control"
                    required value="{{ old('title') }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label text-dark">Descrizione:</label>
                <textarea id="description" name="description" class="form-control" required>{{ old('description') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label text-dark">Immagine (URL):</label>
                <input type="url" id="thumb" name="thumb"
                    class="form-control" required value="{{ old('thumb') }}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label text-dark">Prezzo:</label>
                <input type="text" id="price" name="price"
                    class="form-control" required value="{{ old('price') }}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label text-dark">Serie:</label>
                <input type="text" id="series" name="series"
                    class="form-control" required value="{{ old('series') }}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label text-dark">Data di uscita:</label>
                <input type="date" id="sale_date" name="sale_date"
                    class="form-control" required value="{{ old('sale_date') }}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label text-dark">Tipo:</label>
                <input type="text" id="type" name="type" class="form-control"
                    required value="{{ old('type') }}">
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label text-dark">Artisti:</label>
                <input type="text" id="artists" name="artists"
                    class="form-control" required value="{{ old('artists') }}">
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label text-dark">Scrittori:</label>
                <input type="text" id="writers" name="writers"
                    class="form-control" required value="{{ old('writers') }}">
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi Fumetto</button>
        </form>
    </div>
@endsection
