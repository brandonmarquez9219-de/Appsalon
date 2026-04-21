<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class ServicioController extends Controller
{
    
    public function index()
    {
        $servicios = Servicio::all();
        return view('servicios.index', compact('servicios'));
    }

    
    public function create()

    {
        return view('servicios.create');
    }

    
    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        'precio' => 'required|numeric'
    ]);

    Servicio::create($request->only(['nombre', 'precio']));

    return redirect('/servicios');
}
    
    public function show(string $id)
    {
        
    }

    
    public function edit(string $id)
    {
        $servicio = Servicio::findOrFail($id);
    return view('servicios.edit', compact('servicio'));
    }

    
    public function update(Request $request, string $id)
    {
        $servicio = Servicio::findOrFail($id);
        $servicio->update($request->all());
    return redirect()->route('servicios.index')->with('success', 'Servicio actualizado correctamente.');
    }

    
    public function destroy(string $id)

    {    
        $servicio = Servicio::findOrFail($id);
        $servicio->delete();
        return redirect()->route('servicios.index')->with('success', 'Servicio eliminado correctamente.');
        
    }
}
