<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
        <h1>LISTA DE USUARIOS</h1>
        <table class="tabla">
            
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo electronico</th>
                </tr>
            </thead>
            @forelse($users as $user)
            <tbody>
                <tr>
                    <td><a href="#">{{$user->name}}</a></td>
                    <td><a href="#">{{$user->email}}</a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="2">No hay sistema</td>
                </tr>
            @endforelse
            </tbody>
        </table>
</body>
</html>