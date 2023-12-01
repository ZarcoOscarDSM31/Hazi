<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Boletos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="m-0 vh-100 row justify-content-center align-items-center">


    <!-- Título del container -->
    <div class="card mb-4 col-md-12">
        <!-- Título de la tabla -->
        <div class="card-header">
            <h2 class="mt-4 text-center">EDITAR BOLETOS</h2>
        </div>

            <div class="card-body">
                <!-- FORMULARIO PARA AGREGAR -->
                <form action="{{ route('boletosSalvar',['id' => $boletosEdit->id_boletos]) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="row m-2">
                            <label for="Floatingprecio">Precio</label>
                            <input id="Floatingprecio" type="input" name="precio" class="form-control"  value="{{ $boletosEdit->precio }}" aria-describedby="precioHelp" required>
                            <div id="precioHelp" class="form-text">@if($errors->first('precio'))<i>El campo precio no es correcto!</i>@endif</div>
                        </div>
                        <div class="row m-2">
                            <label for="Floatingfecha_compra">Fecha de compra</label>
                            <input id="Floatingfecha_compra" type="input" name="fecha_compra" class="form-control" value="{{ $boletosEdit->fecha_compra }}" aria-describedby="fecha_compraHelp" required>
                            <div id="fecha_compraHelp" class="form-text">@if($errors->first('fecha_compra'))<i>El campo fecha de compra no es correcto!</i>@endif</div>
                        </div>
                        <div class="row m-2">
                            <label for="Floatingfecha_salida">Fecha de adquisición</label>
                            <input id="Floatingfecha_salida" type="input" name="fecha_salida" class="form-control" value="{{ $boletosEdit->fecha_salida }}" aria-describedby="fecha_salidaHelp" required>
                            <div id="fecha_salidaHelp" class="form-text">@if($errors->first('fecha_salida'))<i>El campo Fecha de adquisición no es correcto!</i>@endif</div>
                        </div>
                        <div class="row m-2">
                            <label for="Floatingfk_id_cliente">Cliente</label>
                            <input id="Floatingfk_id_cliente" type="input" name="fk_id_cliente" class="form-control"  value="{{ $boletosEdit->fk_id_cliente }}" aria-describedby="fk_id_clienteHelp" required>
                            <div id="fk_id_clienteHelp" class="form-text">@if($errors->first('fk_id_cliente'))<i>El campo cliente no es correcto!</i>@endif</div>
                        </div>
                        <div class="row m-2">
                            <label for="Floatingfk_id_destino">Destino</label>
                            <input id="Floatingfk_id_destino" type="input" name="fk_id_destino" class="form-control"  value="{{ $boletosEdit->fk_id_destino }}" aria-describedby="fk_id_destinoHelp" required>
                            <div id="fk_id_destinoHelp" class="form-text">@if($errors->first('fk_id_destino'))<i>El campo destino no es correcto!</i>@endif</div>
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
                            <a href="{{ route('boletosIndex') }}">
                                <button type="button" class="btn btn-primary ">Cancelar</button>
                            </a>
                        </div>
                    </div>


                </form>
            </div>
    </div>
</body>
</html>
