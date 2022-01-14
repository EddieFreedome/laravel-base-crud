<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //prelevare dal database tutti gli elementi della tabella comic
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
        //generare una vista che mostri tutti gli elementi estratti
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //view: comic-create; genera la vista che contiene il form per la creazione di un nuovo comic.
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //estrarre dalla request i dati immessi dall'utente
        $data = $request->all(); 
        //creare un nuovo comic usando i dati estratti
        $newComic = new Comic;
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        //salvare nuovo comic nella tabella
        $newComic->save();
        return redirect('comics'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //generare una vista che contiene i dettagli del nome del fumetto (variabile nell'argomento della funzione)
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //generare una vista che contiene il form di creazione del fumetto ma con i campi gia' compilati e resi modificabili (usare variabile comic per richiamare il fumetto)

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //estrarre dalla request i dati immessi dall'utente
        //aggiornare il comic esistente specificato nel paramentro
        //salvare le modifiche al comic
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
    }
}
