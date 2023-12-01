<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Dirección</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="m-0 vh-100 row justify-content-center align-items-center">


    <!-- Título del container -->
    <div class="card mb-4 col-md-12">
        <!-- Título de la tabla -->
        <div class="card-header">
            <h2 class="mt-4 text-center">EDITAR DIRECCIÓN</h2>
        </div>

            <div class="card-body">
                <!-- FORMULARIO PARA AGREGAR -->
                <form action="{{ route('direccionSalvar',['id' => $direccionEdit->id_direccion]) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="row m-2">
                            <label for="Floatingcalle">Calle</label>
                            <input id="Floatingcalle" type="input" name="calle" class="form-control"  value="{{ $direccionEdit->calle }}" aria-describedby="calleHelp" required>
                            <div id="calleHelp" class="form-text">@if($errors->first('calle'))<i>El campo Calle no es correcto!</i>@endif</div>
                        </div>
                        <div class="row m-2">
                            <label for="Floatingno_interior">No. Interior</label>
                            <input id="Floatingno_interior" type="input" name="no_interior" class="form-control" value="{{ $direccionEdit->no_interior }}" aria-describedby="no_interiorHelp" required>
                            <div id="no_interiorHelp" class="form-text">@if($errors->first('no_interior'))<i>El campo No. Interior no es correcto!</i>@endif</div>
                        </div>
                        <div class="row m-2">
                            <label for="Floatingno_exterior">No. Exterior</label>
                            <input id="Floatingno_exterior" type="input" name="no_exterior" class="form-control" value="{{ $direccionEdit->no_exterior }}" aria-describedby="no_exteriorHelp" required>
                            <div id="no_exteriorHelp" class="form-text">@if($errors->first('no_exterior'))<i>El campo No. Exterior no es correcto!</i>@endif</div>
                        </div>
                        <div class="row m-2">
                            <label for="Floatingcop">Código Postal</label>
                            <input id="Floatingcop" type="input" name="cop" class="form-control"  value="{{ $direccionEdit->cop }}" aria-describedby="copHelp" required>
                            <div id="copHelp" class="form-text">@if($errors->first('cop'))<i>El campo Código Postal no es correcto!</i>@endif</div>
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
                            <a href="{{ route('direccionIndex') }}">
                                <button type="button" class="btn btn-primary ">Cancelar</button>
                            </a>
                        </div>
                    </div>


                </form>
            </div>
    </div>
</body>
</html>
