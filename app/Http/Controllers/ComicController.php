<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:255', 'min:2'],
            'thumb' => ['required'],
            'price' => ['required', 'min:0.99', 'numeric'],
            'series' => ['required', 'max:255', 'min:2'],
            'sale_date' => ['required', 'date', 'date_format:dd-mm-yyyy'],
            'description' => ['required']
        ]);
        $form_data = $request->all();
        $newComic = new Comic();
        $newComic->fill($form_data);
        $newComic->save();
        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:255', 'min:2'],
            'thumb' => ['required'],
            'price' => ['required', 'min:0.99', 'numeric'],
            'series' => ['required', 'max:255', 'min:2'],
            'sale_date' => ['required', 'date', 'date_format:Y-m-d'],
            'description' => ['required']
        ]);

        $form_data = $request->all();
        $comic->update($form_data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('message', "Comic {$comic->title} (id: {$comic->id}) cancellato con successo !");
    }
}
