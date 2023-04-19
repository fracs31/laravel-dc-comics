{{-- Layout --}}
@extends("layouts.app")
{{-- Contenuto --}}
@section("content")
    {{-- Container --}}
    <div class="container">
        {{-- Titolo --}}
        <h1>
            Edit
        </h1>
        {{-- Form --}}
        <form class="row g-3 pt-3" action="{{ route("comics.update", $comic) }}" method="POST">
            {{-- Cross-Site Request Forgery --}}
            @csrf
            {{-- Metodo --}}
            @method("PUT")
            {{-- Titolo --}}
            <div class="col-12">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error("title") is-invalid @enderror" name="title" value="{{ $comic->title }}">
                {{-- Errore --}}
                @error("title")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- Descrizione --}}
            <div class="col-12">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error("description") is-invalid @enderror" id="floatingTextarea" name="description">{{ $comic->description }}</textarea>
                {{-- Errore --}}
                @error("description")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- Copertina --}}
            <div class="col-12">
                <label for="thumb" class="form-label">Copertina (URL)</label>
                <input type="text" class="form-control @error("thumb") is-invalid @enderror" name="thumb" value="{{ $comic->thumb }}">
                {{-- Errore --}}
                @error("thumb")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- Prezzo --}}
            <div class="col-12">
                <label for="price" class="form-label">Prezzo ($)</label>
                <input type="text" class="form-control @error("price") is-invalid @enderror" name="price" value="{{ $comic->price }}">
                {{-- Errore --}}
                @error("price")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- Serie --}}
            <div class="col-12">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control @error("series") is-invalid @enderror" name="series" value="{{ $comic->series }}">
                {{-- Errore --}}
                @error("series")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- Data di uscita --}}
            <div class="col-12">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input type="text" class="form-control @error("sale_date") is-invalid @enderror" name="sale_date" value="{{ $comic->sale_date }}">
                {{-- Errore --}}
                @error("sale_date")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- Tipo --}}
            <div class="col-12">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control @error("type") is-invalid @enderror" name="type" value="{{ $comic->type }}">
                {{-- Errore --}}
                @error("type")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- Invia --}}
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Edita</button>
            </div>
        </form>
    </div>
@endsection