<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic; //model

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all(); //prendo tutti i fumetti
        return view("comics.index", compact("comics")); //restituisco la vista
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create"); //restituisco la vista
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all(); //prendo i dati dal form
        $newComic = new Comic(); //fumetto
        $newComic->title = $data["title"]; //titolo
        $newComic->description = $data["description"]; //descrizione
        $newComic->thumb = $data["thumb"]; //copertina
        $newComic->price = $data["price"]; //prezzo
        $newComic->series = $data["series"]; //serie
        $newComic->sale_date = $data["sale_date"]; //data di uscita
        $newComic->type = $data["type"]; //tipo
        $newComic->save(); //salvo i dati nel database
        return to_route("comics.show", $newComic); //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view("comics.show", compact("comic")); //restituisco la vista
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
