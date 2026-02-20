<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use Laravel\Boost\Install\Assists\Inertia;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $characters = Character::all();
        $fields = $characters->first()?->getFillable()??[];

        return view('characters.list', compact('characters', 'fields'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('characters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCharacterRequest $request)
    {
        //
        $values = $request->input();
        Character::create($values);
        return redirect()->route('characters.index')
            ->with('success', 'Character created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        //
        return view('characters.edit', compact('character'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCharacterRequest $request, Character $character)
    {
        //
        $character->update($request->input());
        return redirect()->route('characters.index')
            ->with('success', 'Character updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $character)
    {
        //
        $character->delete();
        return redirect()->route('characters.index')->with('success', 'Project deleted successfully.');
    }
}
