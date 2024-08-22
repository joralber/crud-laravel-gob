@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Proyecto</h1>
        <div class="mb-3">
            <strong>Id:</strong> {{ $proyecto->id }}
        </div>
        <div class="mb-3">
            <strong>Nombre del Proyecto:</strong> {{ $proyecto->NombreProyecto }}
        </div>
        <div class="mb-3">
            <strong>Fuente de Fondos:</strong> {{ $proyecto->fuenteFondos }}
        </div>
        <div class="mb-3">
            <strong>Monto Planificado:</strong> {{ $proyecto->MontoPlanificado }}
        </div>
        <div class="mb-3">
            <strong>Monto Patrocinado:</strong> {{ $proyecto->MontoPatrocinado }}
        </div>
        <div class="mb-3">
            <strong>Monto Fondos Propios:</strong> {{ $proyecto->MontoFondosPropios }}
        </div>
        <a href="{{ route('proyectos.index') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection
