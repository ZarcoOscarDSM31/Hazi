<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Transporte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="m-0 vh-100 row justify-content-center align-items-center">


    <!-- Título del container -->
    <div class="card mb-4 col-md-12">
        <!-- Título de la tabla -->
        <div class="card-header">
            <h2 class="mt-4 text-center">EDITAR TRANSPORTE</h2>
        </div>

            <div class="card-body">
                <!-- FORMULARIO PARA AGREGAR -->
                <form action="{{ route('transporteSalvar',['id' => $transporteEdit->id_transporte]) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="row m-2">
                            <label for="Floatingcapacidad">Capacidad</label>
                            <input id="Floatingcapacidad" type="input" name="capacidad" class="form-control"  value="{{ $transporteEdit->capacidad }}" aria-describedby="capacidadHelp" required>
                            <div id="capacidadHelp" class="form-text">@if($errors->first('capacidad'))<i>El campo capacidad no es correcto!</i>@endif</div>
                        </div>
                        <div class="row m-2">
                            <label for="FloatingPeso">Peso</label>
                            <input id="FloatingPeso" type="input" name="peso" class="form-control" value="{{ $transporteEdit->peso }}" aria-describedby="pesoHelp" required>
                            <div id="PesoHelp" class="form-text">@if($errors->first('peso'))<i>El campo peso no es correcto!</i>@endif</div>
                        </div>
                        <div class="row m-2">
                            <label for="Floatingno_asiento">No. de asiento</label>
                            <input id="Floatingno_asiento" type="input" name="no_asiento" class="form-control" value="{{ $transporteEdit->no_asiento }}" aria-describedby="no_asientoHelp" required>
                            <div id="no_asientoHelp" class="form-text">@if($errors->first('no_asiento'))<i>El campo No. de asiento no es correcto!</i>@endif</div>
                        </div>
                        <div class="row m-2">
                            <label for="Floatingfk_id_destino">Destino</label>
                            <input id="Floatingfk_id_destino" type="input" name="fk_id_destino" class="form-control"  value="{{ $transporteEdit->fk_id_destino }}" aria-describedby="fk_id_destinoHelp" required>
                            <div id="fk_id_destinoHelp" class="form-text">@if($errors->first('fk_id_destino'))<i>El campo Destino no es correcto!</i>@endif</div>
                        </div>
                    </div>
                </div>
                    <div class="row">
                    <!-- BOTÓN DE ENVÍO -->
                            <div class="col-md-1">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                    <!--BOTÓN DE VOLVER -->
                        <div class="col-md-3">
                            <a href="{{ route('transporteIndex') }}">
                                <button type="button" class="btn btn-primary ">Cancelar</button>
                            </a>
                        </div>
                    </div>


                </form>
            </div>
    </div>
</body>
</html>
