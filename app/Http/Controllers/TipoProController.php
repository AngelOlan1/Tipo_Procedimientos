<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoPro; // Asegúrate de importar el modelo TipoPro

class TipoProController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos = TipoPro::all(); // Recuerda usar `all()` en minúscula
        return view('tipopro.index', compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipopro.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'TipoPro' => 'required|max:50',
            'Clave' => 'required|max:5',
        ]);

        // El código de creación debe estar dentro del método `store`
        TipoPro::create($request->all());

        return redirect()->route('tipopro.index')
                         ->with('success', 'Tipo de procedimiento creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tipo = TipoPro::find($id);
        return view('tipopro.show', compact('tipo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tipo = TipoPro::find($id);
        return view('tipopro.edit', compact('tipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'TipoPro' => 'required|max:50',
            'Clave' => 'required|max:5',
        ]);

        $tipo = TipoPro::find($id);
        $tipo->update($request->all());

        return redirect()->route('tipopro.index')
                         ->with('success', 'Tipo de procedimiento actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tipo = TipoPro::find($id);
        $tipo->delete();

        return redirect()->route('tipopro.index')
                         ->with('success', 'Tipo de procedimiento eliminado exitosamente.');
    }
}
