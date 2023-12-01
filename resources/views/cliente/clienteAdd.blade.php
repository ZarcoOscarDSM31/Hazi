<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="m-0 vh-100 row justify-content-center align-items-center">


    <!-- Título del container -->
    <div class="card mb-4 col-md-12">
        <!-- Título de la tabla -->
        <div class="card-header">
            <h2 class="mt-4 text-center">AGREGAR CLIENTE</h2>
        </div>

            <div class="card-body">
                <!-- FORMULARIO PARA AGREGAR -->
                <form action="{{ route('clienteReg')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="row m-2">
                            <label for="FloatingNombre">Nombre</label>
                            <input id="FloatingNombre" type="input" name="nombre" class="form-control"  value="{{ old('nombre') }}"  aria-describedby="NombreHelp" required>
                            <div id="NombreHelp" class="form-text">@if($errors->first('nombre'))<i>El campo Nombre no es correcto!</i>@endif</div>
                        </div>
                        <div class="row m-2">
                            <label for="Floatingapp">Apellido paterno</label>
                            <input id="Floatingapp" type="input" name="app" class="form-control" value="{{ old('app') }}"  aria-describedby="appHelp">
                            <div id="appHelp" class="form-text">@if($errors->first('app'))<i>El campo Apellido Paterno no es correcto!</i>@endif</div>
                        </div>
                        <div class="row m-2">
                            <label for="Floatingapm">Apellido materno</label>
                            <input id="Floatingapm" type="input" name="apm" class="form-control" value="{{ old('apm') }}"  aria-describedby="apmHelp" required>
                            <div id="apmHelp" class="form-text">@if($errors->first('apm'))<i>El campo Apellido Materno no es correcto!</i>@endif</div>
                        </div>
                        <div class="col-md-5 row m-2">
                            <label for="inputState" class="form-label">Género</label>
                                <select id="sexo" type="radio" name="sexo" class="form-control">
                                    <option value="Femenino" selected>Femenino</option>
                                    <option value="Masculino">Masculino</option>
                                </select>
                        </div>
                        <div class="col-md-5 row m-2">
                            <label for="inputState" class="form-label">Dirección</label>
                                <select id="fk_id_cliente" type="radio" name="fk_id_cliente" class="form-control">
                                    @foreach ($clienteA as $cliente)
                                        <option value="{{ $cliente->calle }}">{{ $cliente->calle }}</option>
                                    @endforeach
                                </select>
                        </div>
                    </div>
                </div>
                    <div class="row">
                    <!-- BOTÓN DE ENVÍO -->
                        <div class="col-md-1">
                                <button class="btn btn-primary" type="submit">Guardar</button>
                        </div>
                    <!--BOTÓN DE VOLVER -->
                        <div class="col-md-3">
                            <a href="{{ route('clienteIndex') }}">
                                <button type="button" class="btn btn-primary ">Volver</button>
                            </a>
                        </div>
                    </div>


                </form>
            </div>
    </div>
</body>
<script></script>
</html>
