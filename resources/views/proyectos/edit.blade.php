@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Proyecto</h1>
        <form action="{{ route('proyectos.update', $proyecto->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="NombreProyecto" class="form-label">Nombre del Proyecto</label>
                <input type="text" class="form-control" id="NombreProyecto" name="NombreProyecto" value="{{ $proyecto->NombreProyecto }}" required>
            </div>
            <div class="mb-3">
                <label for="fuenteFondos" class="form-label">Fuente de Fondos</label>
                <input type="text" class="form-control" id="fuenteFondos" name="fuenteFondos" value="{{ $proyecto->fuenteFondos }}" required>
            </div>
            <div class="mb-3">
                <label for="MontoPlanificado" class="form-label">Monto Planificado</label>
                <input type="number" step="0.01" class="form-control" id="MontoPlanificado" name="MontoPlanificado" value="{{ $proyecto->MontoPlanificado }}" required>
            </div>
            <div class="mb-3">
                <label for="MontoPatrocinado" class="form-label">Monto Patrocinado</label>
                <input type="number" step="0.01" class="form-control" id="MontoPatrocinado" name="MontoPatrocinado" value="{{ $proyecto->MontoPatrocinado }}" required>
            </div>
            <div class="mb-3">
                <label for="MontoFondosPropios" class="form-label">Monto Fondos Propios</label>
                <input type="number" step="0.01" class="form-control" id="MontoFondosPropios" name="MontoFondosPropios" value="{{ $proyecto->MontoFondosPropios }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('proyectos.index') }}" class="btn btn-secondary">Volver</a>

        </form>
    </div>
@endsection
