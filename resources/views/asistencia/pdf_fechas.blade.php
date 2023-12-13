
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de asistencias</title>
</head>

<body>
<h1>Reporte de asistencias</h1>

<table id="example1" class="table table-bordered table-striped table-sm" border="1">
    <thead class="thead">
        <tr>
            <th>Nro</th>

            <th>Fecha</th>
            <th>Nombre y apellido del miembro</th>

        </tr>
    </thead>
    <tbody>
        @php
            $contador =1;
        @endphp
        @foreach ($asistencias as $asistencia)
            <tr>
                <td>{{ $contador++ }}</td>

                <td>{{ $asistencia->fecha }}</td>
                <td>{{ $asistencia->miembro->nombre_apellido }}</td>

            </tr>
        @endforeach
    </tbody>
</table>

</body>

</html>
