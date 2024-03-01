<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    
</head>
<body>
    <h1>Users</h1>
    <a href="{{ route('persona.create') }}">Create new user</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Actualizar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($personas as $persona)
            <tr>
                <td>{{ $persona->name }}</td>
                <td>{{ $persona->last_name }}</td>
                <td><a href="{{route('persona.show', $persona->id)}}" class="edit">DETAILS</a>|<a href="{{ route('persona.edit', $persona->id)}}" class="edit">EDIT</a>|
                    <form method="POST" action="{{route('persona.destroy', $persona->id)}}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="DELETE" class="edit"/>
                        </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
