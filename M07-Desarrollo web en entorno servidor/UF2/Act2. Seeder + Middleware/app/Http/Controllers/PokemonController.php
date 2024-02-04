<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::all();
        return view('pokemons.index', compact('pokemons'));
    }

    public function create()
    {
        return view('pokemons.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'size' => 'nullable|in:grande,mediano,pequeño',
            'weight' => 'nullable|numeric',
        ]);

        Pokemon::create($request->all());

        return redirect()->route('pokemons.index');
    }

    public function edit(Pokemon $pokemon)
    {
        return view('pokemons.edit', compact('pokemon'));
    }

    public function update(Request $request, Pokemon $pokemon)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'size' => 'nullable|in:grande,mediano,pequeño',
            'weight' => 'nullable|numeric',
        ]);

        $pokemon->update($request->all());

        return redirect()->route('pokemons.index');
    }

    public function destroy(Pokemon $pokemon)
    {
        $pokemon->delete();

        return redirect()->route('pokemons.index');
    }
}
