<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create user</title>
</head>
<body>
    <a href="{{ route('persona.index') }}">Go back</a>
    <h1>Create user</h1>
    <form action="{{ route('persona.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for="last_name">Apellido:</label><br>
        <input type="text" id="last_name" name="last_name"><br><br>

        <label for="imagen">Imagen:</label><br>
        <input type="file" id="imagen" name="imagen"><br><br>

        <label for="hoja_vida">Hoja de Vida (PDF):</label><br>
        <input type="file" id="hoja_vida" name="hoja_vida"><br><br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
