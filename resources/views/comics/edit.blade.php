{{-- Layout --}}
@extends("layouts.app")
{{-- Contenuto --}}
@section("content")
    {{-- Container --}}
    <div class="container">
        {{-- Titolo --}}
        <h1>
            Create
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
                <input type="text" class="form-control" name="title" value="{{ $comic->title }}">
            </div>
            {{-- Descrizione --}}
            <div class="col-12">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="floatingTextarea" name="description">{{ $comic->description }}</textarea>
            </div>
            {{-- Copertina --}}
            <div class="col-12">
                <label for="thumb" class="form-label">Copertina (URL)</label>
                <input type="text" class="form-control" name="thumb" value="{{ $comic->thumb }}">
            </div>
            {{-- Prezzo --}}
            <div class="col-12">
                <label for="price" class="form-label">Prezzo ($)</label>
                <input type="text" class="form-control" name="price" value="{{ $comic->price }}">
            </div>
            {{-- Serie --}}
            <div class="col-12">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" value="{{ $comic->series }}">
            </div>
            {{-- Data di uscita --}}
            <div class="col-12">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input type="text" class="form-control" name="sale_date" value="{{ $comic->sale_date }}">
            </div>
            {{-- Tipo --}}
            <div class="col-12">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type" value="{{ $comic->type }}">
            </div>
            {{-- Invia --}}
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Edita</button>
            </div>
        </form>
    </div>
@endsection