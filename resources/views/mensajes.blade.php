<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
  <div class="row">
  <!--Columna para crear nuevo mensaje-->
    <div class="col-12">
        <center>
            <h4>¿Desea crear un nuevo mensaje?</h4>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#creacionMensajeModal">Crear nuevo mensaje</button>
        </center> 
        <hr>
    </div>
    <div class="col-12">
        <h3>Mensajes:</h3>
        <br>
        @foreach($mensajes as $mensaje)
            <h4>{{$mensaje->title}}</h4>
            <br>
            <p>{{$mensaje->description}}</p>
            <br>
        @endforeach
        <hr>
    </div>
    
    <!--Modal para creacion de nuevos mensajes-->
    <form action="crearMensaje" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="modal fade" id="creacionMensajeModal" tabindex="-1" role="dialog" aria-labelledby="creacionMensajeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="creacionMensajeModalLabel">Crear nuevo mensaje</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <input type="text" name="titulo" placeholder="Titulo"><br>
                    <input type="text" name="descripcion" placeholder="Descripcion">
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
    </form>
  </div>
</div>
</body>
</html>