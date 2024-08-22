<?php

namespace App\Http\Controllers;

use App\Models\proyectos;
use PDF;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectos = proyectos::paginate(10); // Paginación de 10 en 10
        return view('index', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proyectos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'NombreProyecto' => 'required|string|max:255',
            'fuenteFondos' => 'required|string|max:255',
            'MontoPlanificado' => 'required|numeric',
            'MontoPatrocinado' => 'required|numeric',
            'MontoFondosPropios' => 'required|numeric',
        ]);

        proyectos::create($request->all());

        return redirect()->route('proyectos.index')
                         ->with('success', 'Proyecto creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(proyectos $proyecto)
    {
        return view('proyectos.show', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(proyectos $proyecto)
    {
        return view('proyectos.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, proyectos $proyecto)
    {
        $request->validate([
            'NombreProyecto' => 'required|string|max:255',
            'fuenteFondos' => 'required|string|max:255',
            'MontoPlanificado' => 'required|numeric',
            'MontoPatrocinado' => 'required|numeric',
            'MontoFondosPropios' => 'required|numeric',
        ]);

        $proyecto->update($request->all());

        return redirect()->route('proyectos.index')
                         ->with('success', 'Proyecto actualizado exitosamente.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(proyectos $proyecto)
    {
        $proyecto->delete();

        return redirect()->route('proyectos.index')
                         ->with('success', 'Proyecto eliminado exitosamente.');

    }

    public function generarInformePDF()
    {
        $proyectos = Proyectos::all();
        $pdf = PDF::loadView('proyectos.informe', compact('proyectos'));
        return $pdf->stream('informe_proyectos.pdf');
    }
}
