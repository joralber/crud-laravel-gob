@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Proyecto</h1>
        <form action="{{ route('proyectos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="NombreProyecto" class="form-label">Nombre del Proyecto</label>
                <input type="text" class="form-control" id="NombreProyecto" name="NombreProyecto" required>
            </div>
            <div class="mb-3">
                <label for="fuenteFondos" class="form-label">Fuente de Fondos</label>
                <input type="text" class="form-control" id="fuenteFondos" name="fuenteFondos" required>
            </div>
            <div class="mb-3">
                <label for="MontoPlanificado" class="form-label">Monto Planificado</label>
                <input type="number" step="0.01" class="form-control" id="MontoPlanificado" name="MontoPlanificado" required>
            </div>
            <div class="mb-3">
                <label for="MontoPatrocinado" class="form-label">Monto Patrocinado</label>
                <input type="number" step="0.01" class="form-control" id="MontoPatrocinado" name="MontoPatrocinado" required>
            </div>
            <div class="mb-3">
                <label for="MontoFondosPropios" class="form-label">Monto Fondos Propios</label>
                <input type="number" step="0.01" class="form-control" id="MontoFondosPropios" name="MontoFondosPropios" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{ route('proyectos.index') }}" class="btn btn-secondary">Volver</a>

        </form>
    </div>
@endsection
