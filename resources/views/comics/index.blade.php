{{-- Layout --}}
@extends('layouts.app')
{{-- Contenuto --}}
@section('content')
    {{-- Container --}}
    <div class="container">
        {{-- Titolo --}}
        <h1>
            Tutti i fumetti
        </h1>
        {{-- Tabella --}}
        <table class="table">
            {{-- Testa --}}
            <thead>
              <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Prezzo ($)</th>
                <th scope="col">Serie</th>
                <th scope="col">Data di uscita</th>
                <th scope="col">Tipo</th>
                <th scope="col">Show</th>
              </tr>
            </thead>
            {{-- Corpo --}}
            <tbody>
                {{-- Ciclo --}}
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td class="d-flex gap-2">
                            {{-- Info --}}
                            <a class="btn btn-primary" href="{{ route("comics.show", $comic)}}">Info</a>
                            {{-- Edita --}}
                            <a class="btn btn-warning" href="{{ route("comics.edit", $comic)}}">Edita</a>
                            {{-- Cancella --}}
                            <form action="{{ route("comics.destroy", $comic) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-danger" type="submit">Cancella</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection