<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de Persona</title>
</head>
<body>
    <h1>Detalles de Persona</h1>
    <div>
        <strong>Nombre:</strong> {{ $persona->name }}<br>
        <strong>Apellido:</strong> {{ $persona->last_name }}<br>

        @if($persona->imagen)
        <strong>Imagen:</strong><br>
        <img src="{{ asset('storage/imagenes/'.$persona->imagen) }}" width="200" alt="Imagen de {{ $persona->name }}"><br>
        @endif

        @if($persona->hoja_vida)
        <strong>Hoja de Vida (PDF):</strong><br>
        <a href="{{ asset('storage/hojas_vida/'.$persona->hoja_vida) }}" target="_blank">Ver Hoja de Vida</a><br>
        @endif
    </div>
</body>
</html>
