@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Proyectos</h1>
        <a href="{{ route('proyectos.create') }}" class="btn btn-primary">Crear Proyecto</a>
        <a href="{{ route('proyectos.informe.pdf') }}" class="btn btn-secondary">Generar Informe PDF</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre del Proyecto</th>
                    <th>Fuente de Fondos</th>
                    <th>Monto Planificado</th>
                    <th>Monto Patrocinado</th>
                    <th>Monto Fondos Propios</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proyectos as $proyecto)
                    <tr>
                        <td>{{ $proyecto->id }}</td>
                        <td>{{ $proyecto->NombreProyecto }}</td>
                        <td>{{ $proyecto->fuenteFondos }}</td>
                        <td>{{ $proyecto->MontoPlanificado }}</td>
                        <td>{{ $proyecto->MontoPatrocinado }}</td>
                        <td>{{ $proyecto->MontoFondosPropios }}</td>
                        <td>
                            <a href="{{ route('proyectos.edit', $proyecto->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                            <a href="{{ route('proyectos.show', $proyecto->id) }}" class="btn btn-success">ver</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $proyectos->links() }}
        </div>
    </div>
@endsection
