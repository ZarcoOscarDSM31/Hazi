<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar dirección</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="m-0 vh-100 row justify-content-center align-items-center">


    <!-- Título del container -->
    <div class="card mb-4 col-md-12">
        <!-- Título de la tabla -->
        <div class="card-header">
            <h2 class="mt-4 text-center">AGREGAR DIRECCIÓN</h2>
        </div>

            <div class="card-body">
                <!-- FORMULARIO PARA AGREGAR -->
                <form action="{{ route('direccionReg')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h5>Datos personales</h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row m-2">
                            <label for="FloatingCalle">Calle</label>
                            <input id="FloatingCalle" type="input" name="calle" class="form-control"  value="{{ old('calle') }}"  aria-describedby="CalleHelp" required>
                            <div id="CalleHelp" class="form-text">@if($errors->first('calle'))<i>El campo Calle no es correcto!</i>@endif</div>
                        </div>
                        <div class="row m-2">
                            <label for="FloatingNo_interior">Numero interior</label>
                            <input id="FloatingNo_interior" type="input" name="no_interior" class="form-control" value="{{ old('no_interior') }}"  aria-describedby="no_interiorHelp">
                            <div id="No_interiorHelp" class="form-text">@if($errors->first('no_interior'))<i>El campo Número interior no es correcto!</i>@endif</div>
                        </div>
                        <div class="row m-2">
                            <label for="FloatingNo_exterior">Numero exterior</label>
                            <input id="FloatingNo_exterior" type="input" name="no_exterior" class="form-control" value="{{ old('no_exterior') }}"  aria-describedby="no_exteriorHelp" required>
                            <div id="No_exteriorHelp" class="form-text">@if($errors->first('no_exterior'))<i>El campo Número exterior no es correcto!</i>@endif</div>
                        </div>
                        <div class="row m-2">
                            <label for="FloatingCop">Código Postal</label>
                            <input id="FloatingCop" type="input" name="cop" class="form-control" value="{{ old('cop') }}"  aria-describedby="copHelp" required>
                            <div id="CopHelp" class="form-text">@if($errors->first('cop'))<i>El campo Código Postal no es correcto!</i>@endif</div>
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
                            <a href="{{ route('direccionIndex') }}">
                                <button type="button" class="btn btn-primary ">Vover</button>
                            </a>
                        </div>
                    </div>


                </form>
            </div>
    </div>
</body>
<script></script>
</html>
