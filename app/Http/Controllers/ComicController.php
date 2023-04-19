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
        //Prendo i dati dal form e li valido
        $data = $request->validate([
            "title" => ["required", "max:255"],
            "description" => "required",
            "thumb" => ["required", "url"],
            "price" => ["required", "numeric"],
            "series" => ["required", "max:255"],
            "sale_date" => ["required", "date"],
            "type" => ["required", "max:255"]
        ]);
        $newComic = Comic::create($data); //creazione del fumetto
        return to_route("comics.show", $newComic); //restituisco la vista "show"
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
    public function edit(Comic $comic)
    {
        return view("comics.edit", compact("comic")); //restituisco la vista
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //Prendo i dati dal form e li valido
        $data = $request->validate([
            "title" => ["required", "max:255"],
            "description" => "required",
            "thumb" => ["required", "url"],
            "price" => ["required", "numeric"],
            "series" => ["required", "max:255"],
            "sale_date" => ["required", "date"],
            "type" => ["required", "max:255"]
        ]);
        $comic->update($data); //aggiorno i dati del fumetto
        return to_route("comics.show", $comic); //restituisco la vista "show"
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete(); //cancello il fumetto
        return to_route("comics.index"); //restituisco la vista "index"
    }
}
