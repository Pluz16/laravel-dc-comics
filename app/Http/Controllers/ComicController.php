<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', [
            'comics' => $comics
        ]);
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {
        $comic = Comic::create($request->all());

        return redirect()->route('comics.show', $comic);
    }

        public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic)
{
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'thumb' => 'required|url',
        'price' => 'required|numeric',
        'series' => 'required|max:255',
        'sale_date' => 'required|date',
        'type' => 'required|max:255',
    ]);

    $comic->update($validatedData);

    return redirect()->route('comics.show', $comic)->with('success', 'Comic updated successfully');
}


}

