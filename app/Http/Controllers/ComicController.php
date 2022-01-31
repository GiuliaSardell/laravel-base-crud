<?php

//RESOURCE CONTROLLER

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Support\Str;
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
        $comicList = Comic::orderBy('id', 'desc')->paginate(4);
        return view('comics.index', compact('comicList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                //value del form => controlli che voglio fare su quel dato
                'title' => 'required|max:50|min:2',
                'thumb' => 'max:255|min:2',
                'price' => 'required|numeric|min:1',
                'series' => 'required|max:50|min:2',
                'type' => 'required|max:50|min:2',
                'sale_date' => 'required|date',
                'description' => 'required|max:255|min:2'
            ],
            //passo un secondo array a validate per poter stilizzare gli errori
            [
                'title.required' => 'Il titolo è un campo obbligatorio',
                'title.max' => 'Il titolo non può essere più lungo di :max caratteri',
                'title.min' => 'Il titolo non può essere più corto di :min caratteri',

                'thumb.max' => 'Questo campo non può contenere più di :max caratteri',
                'thumb.min' => 'Questo campo non può essere più corto di :min caratteri',

                'price.required' => 'Il prezzo è un campo obbligatorio',
                'price.numeric' => 'Il prezzo deve essere scritto in numeri',
                'price.min' => 'Il prezzo non può essere più corto di :min caratteri',

                'series.required' => 'Questo campo è obbligatorio',
                'series.max' => 'La serie non può essere più lunga di :max caratteri',
                'series.min' => 'La serie non può essere più corta di :min caratteri',

                'type.required' => 'Questo campo è obbligatorio',
                'type.max' => 'Il tipo non può essere più lungo di :max caratteri',
                'type.min' => 'Il tipo non può essere più corto di :min caratteri',

                'sale_date.required' => 'Questo campo è obbligatorio',
                'sale_date.date' => 'Questo campo deve essere una data',

                'description.required' => 'Questo campo è obbligatorio',
                'description.max' => 'La descrizione non può essere più lunga di :max caratteri',
                'description.min' => 'La descrizione non può essere più corta di :min caratteri',
      

            ]
            );

        $data = $request->all(); //salvo tutti i dati in arrivo dentro data-> ottengo un array associativo
        //o creo un'istanza e tutte le sue proprietà qua o uso il metodo fill() prende i dati dal Model

        $new_comic = new Comic();
        $data['slug'] = Str::slug($data['title'], '-');
        $new_comic->fill($data); //lo riempio con i dati fillable del model

       

        $new_comic->save();

        return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);

        // dd($comic);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
        
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
        $data = $request->all();
        $comic->update($data);

        $data['slug'] = Str::slug($data['title'], '-');

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('deleted', "Il fumetto $comic->title è stato eliminato");
    }
}
