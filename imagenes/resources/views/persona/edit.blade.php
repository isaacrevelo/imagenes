<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Persona</title>
    <!-- Agrega cualquier CDN o enlaces a archivos CSS que necesites aquí -->
</head>
<body>
    <h1>Editar Persona</h1>
    <form action="{{ route('persona.update', $persona->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name" value="{{ $persona->name }}"><br><br>

        <label for="last_name">Apellido:</label><br>
        <input type="text" id="last_name" name="last_name" value="{{ $persona->last_name }}"><br><br>

        <label for="imagen">Imagen:</label><br>
        <input type="file" id="imagen" name="imagen"><br>
        @if($persona->imagen)
        <img src="{{ asset('storage/imagenes/'.$persona->imagen) }}" width="100" alt="Imagen de {{ $persona->name }}"><br><br>
        @endif

        <label for="hoja_vida">Hoja de Vida (PDF):</label><br>
        <input type="file" id="hoja_vida" name="hoja_vida"><br>
        @if($persona->hoja_vida)
        <a href="{{ asset('storage/hojas_vida/'.$persona->hoja_vida) }}" target="_blank">Ver Hoja de Vida</a><br><br>
        @endif

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
