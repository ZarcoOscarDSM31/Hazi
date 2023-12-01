<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="m-0 vh-100 row justify-content-center align-items-center">


    <!-- Título del container -->
    <div class="card mb-4 col-md-12">
        <!-- Título de la tabla -->
        <div class="card-header">
            <h2 class="mt-4 text-center">EDITAR CLIENTE</h2>
        </div>

            <div class="card-body">
                <!-- FORMULARIO PARA AGREGAR -->
                <form action="{{ route('clienteSalvar',['id' => $clienteEdit->id_cliente]) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="row m-2">
                            <label for="Floatingnombre">Nombre</label>
                            <input id="Floatingnombre" type="input" name="nombre" class="form-control"  value="{{ $clienteEdit->nombre }}" aria-describedby="nombreHelp" required>
                            <div id="nombreHelp" class="form-text">@if($errors->first('nombre'))<i>El campo Nombre no es correcto!</i>@endif</div>
                        </div>
                        <div class="row m-2">
                            <label for="Floatingapp">Apellido Paterno</label>
                            <input id="Floatingapp" type="input" name="app" class="form-control"  value="{{ $clienteEdit->app }}" aria-describedby="appHelp" required>
                            <div id="appHelp" class="form-text">@if($errors->first('app'))<i>El campo Apellido Paterno no es correcto!</i>@endif</div>
                        </div>
                        <div class="row m-2">
                            <label for="Floatingapm">Apellido Materno</label>
                            <input id="Floatingapm" type="input" name="apm" class="form-control"  value="{{ $clienteEdit->apm }}" aria-describedby="apmHelp">
                            <div id="apmHelp" class="form-text">@if($errors->first('apm'))<i>El campo Apellido Materno no es correcto!</i>@endif</div>
                        </div>
                        <div class="row m-2">
                            <label for="Floatingsexo">Género</label>
                            <input id="Floatingsexo" type="input" name="sexo" class="form-control"  value="{{ $clienteEdit->sexo }}" aria-describedby="sexoHelp" required>
                            <div id="sexoHelp" class="form-text">@if($errors->first('sexo'))<i>El campo Género no es correcto!</i>@endif</div>
                        </div>
                        <div class="row m-2">
                            <label for="Floatingfk_id_direccion">Dirección</label>
                            <input id="Floatingfk_id_direccion" type="input" name="fk_id_direccion" class="form-control"  value="{{ $clienteEdit->fk_id_direccion }}" aria-describedby="fk_id_direccionHelp">
                            <div id="fk_id_direccionHelp" class="form-text">@if($errors->first('calle'))<i>El campo Dirección no es correcto!</i>@endif</div>
                        </div>
                </div>
                    <div class="row">
                    <!-- BOTÓN DE ENVÍO -->
                            <div class="col-md-1">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                    <!--BOTÓN DE VOLVER -->
                        <div class="col-md-3">
                            <a href="{{ route('clienteIndex') }}">
                                <button type="button" class="btn btn-primary ">Cancelar</button>
                            </a>
                        </div>
                    </div>


                </form>
            </div>
    </div>
</body>
</html>
