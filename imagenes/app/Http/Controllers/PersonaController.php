<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();
        return view('persona.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string',
            'last_name' => 'required|string',
            'imagen' => 'nullable|image|mimes:jpg,png|max:50', 
            'hoja_vida' => 'nullable|mimes:pdf|max:200', 
        ]);

        $persona = new Persona([
            'name' => $request->input('name'),
            'last_name' => $request->input('last_name'),
            'imagen' => $request->file('imagen'), 
            'hoja_vida' => $request->file('hoja_vida'), 
        ]);

        $persona->save();

        return redirect()->route('persona.index')->with('success', 'Persona creada exitosamente.');
    }

    public function edit(Persona $persona)
    {
        return view('persona.edit', compact('persona'));
    }

    public function update(CandidateRequest $request, Persona $persona)
    {
        $persona->update($request->all());
        return redirect()->route('persona.index');
    }

    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('persona.index');
    }

    public function show(Persona $persona)
    {
        return view('persona.show', compact('persona'));
    }
}