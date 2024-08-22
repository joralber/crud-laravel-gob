<!DOCTYPE html>
<html>
<head>
    <title>Informe de Proyectos</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 8px; text-align: left; }
        h1, h2 { text-align: center; }
    </style>
</head>
<body>
    <h1>Gobierno de El Salvador</h1>
    <h2>Secrtearía de Innovación</h2>
    <p>Fecha: {{ \Carbon\Carbon::now()->format('d/m/Y') }}</p>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre del Proyecto</th>
                <th>Fuente de Fondos</th>
                <th>Monto Planificado</th>
                <th>Monto Patrocinado</th>
                <th>Monto Fondos Propios</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
