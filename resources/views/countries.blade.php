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
    <center>
        <h4>¿Desea crear una nueva ciudad?</h4>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#creacionMensajeModal">Crear nuevo mensaje</button>
    </center> 
    <hr>
</div>
<div class="col-12">
    <center>
        <h2>Listado de paises</h2>
        <br>
        @foreach($paises as $pais)
        <h3>Pais:</h3> {{$pais->country}}
        <h4>Ciudad:</h4>{{$pais->city}}
        <h5>Id de la ciudad:</h5> {{$pais->id}}
        <hr>
        @endforeach
    </center>
</div>

    <!--Modal para creacion de nuevos paises-->
    <form action="formCrearCiudad" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="creacionMensajeModal" tabindex="-1" role="dialog" aria-labelledby="creacionMensajeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="creacionMensajeModalLabel">Crear nuevo pais</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <input type="number" name="id" placeholder="Id del pais"><br>
                    <input type="text" name="city" placeholder="City">
                    <input type="text" name="country" placeholder="Country">
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
</body>
</html>
