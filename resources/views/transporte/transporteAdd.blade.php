<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar transporte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="m-0 vh-100 row justify-content-center align-items-center">


    <!-- Título del container -->
    <div class="card mb-4 col-md-12">
        <!-- Título de la tabla -->
        <div class="card-header">
            <h2 class="mt-4 text-center">AGREGAR TRANSPORTE</h2>
        </div>

            <div class="card-body">
                <!-- FORMULARIO PARA AGREGAR -->
                <form action="{{ route('transporteReg')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="row m-2">
                            <label for="FloatingCapacidad">Capacidad</label>
                            <input id="FloatingCapacidad" type="input" name="capacidad" class="form-control"  value="{{ old('capacidad') }}"  aria-describedby="CapacidadHelp" required>
                            <div id="CapacidadHelp" class="form-text">@if($errors->first('capacidad'))<i>El campo Capacidad no es correcto!</i>@endif</div>
                        </div>
                        <div class="row m-2">
                            <label for="FloatingPeso">Peso</label>
                            <input id="FloatingPeso" type="input" name="peso" class="form-control" value="{{ old('peso') }}"  aria-describedby="PesoHelp">
                            <div id="PesoHelp" class="form-text">@if($errors->first('peso'))<i>El campo Peso no es correcto!</i>@endif</div>
                        </div>
                        <div class="row m-2">
                            <label for="FloatingNo_asiento">Numero de asiento</label>
                            <input id="FloatingNo_asiento" type="input" name="no_asiento" class="form-control" value="{{ old('no_asiento') }}"  aria-describedby="no_asientoHelp" required>
                            <div id="No_asientoHelp" class="form-text">@if($errors->first('no_asiento'))<i>El campo Número de asiento no es correcto!</i>@endif</div>
                        </div>
                        <div class="col-md-5 row m-2">
                            <label for="inputState" class="form-label">Destinos</label>
                                <select id="fk_id_destino" type="radio" name="fk_id_destino" class="form-control">
                                    @foreach ($transporteA as $transporte)
                                        <option value="{{ $transporte->destino }}">{{ $transporte->destino }}</option>
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
                            <a href="{{ route('transporteIndex') }}">
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
