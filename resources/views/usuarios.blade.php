<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos los usuarios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <h2>Todos los usuarios</h2>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Tipo usuario</th>
            <th scope="col">Botón</th>
            </tr>
        </thead>
        <tbody>
        <form action="formEditarUsuario" method="POST" enctype="multipart/form-data">
        @csrf
            @foreach($usuarios as $usuario)
                <tr>
                    <td>
                        <input name="name{{$usuario->id}}" type="text" value="{{$usuario->name}}">
                    </td>
                    <td>
                        <input name="pass{{$usuario->id}}" type="text" value="{{$usuario->password}}">
                    </td>
                    <td>
                        <input name="type_user{{$usuario->id}}" type="text" value="{{$usuario->type_user}}">
                    </td>
                    <td>
                        <button name="btn-actualizar-usuario" type="submit" class="btn btn-primary" value="{{$usuario->id}}">Actualizar</button>
                    </td>
                </tr>
            @endforeach
        </form>
        </tbody>
    </table>
   
</body>
</html>