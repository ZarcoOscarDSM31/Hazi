<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
    <!-- BootStrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <br>
    <h2 style="text-align:center">Lista de Clientes</h2>
    <hr>

    <!-- BOTONES DE NAVEGACIÓN -->
    <div class="row"  >
        <div class="col-md-1" id="carta">
        </div>
        <div class="card shadow col-md-1" id="carta">
            <a href="{{ route('menu') }}" >
                <button type="button" class="btn btn-primary btn-sm">Menu</button>
            </a>
        </div>
        <div class="card shadow col-md-1" id="carta">
            <a href="{{ route('direccionIndex') }}" >
                <button type="button" class="btn btn-primary btn-sm">Direcciones</button>
            </a>
        </div>
        <div class="card shadow col-md-1" id="carta">
            <a href="{{ route('transporteIndex') }}">
                <button type="button" class="btn btn-primary btn-sm">Transportes</button>
            </a>
        </div>
        <div class="card shadow col-md-1" id="carta">
            <a href="{{ route('destinoIndex') }}">
                <button type="button" class="btn btn-primary btn-sm">Destinos</button>
            </a>
        </div>
        <div class="card shadow col-md-1" id="carta">
            <a href="{{ route('boletosIndex') }}">
                <button type="button" class="btn btn-primary btn-sm">Boletos</button>
            </a>
        </div>
        <div class="col-md-2" id="carta">
        </div>
        <div class="card shadow col-md-2" id="carta">
            <a href="{{-- {{ route('clienteAdd') }} --}}">
                <button type="button" class="btn btn-primary btn-sm">+ Agregar</button>
            </a>
        </div>
    </div>
    <br>
<style>
    #carta{
        position: relative;
        justify-content: center;
        display: flex;
        text-align: center;
        align-items:center;
        margin-left:10px;
        width:150px;
        height:60px;
    };
</style>
    <!-- TABLA --->

<div class="card-responsive">
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table border-secondary"  id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Género</td>
                        <td>Dirección</td>
                        <td class="position-relative px-5">Operaciones</td>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($cliente as $cliente)
                        <tr>
                            <td>{{ $cliente->id_cliente }}</td>
                            <td>{{ $cliente->app . " " . $cliente->apm . ", " .$cliente->nombre }}</td>
                            <td>{{ $cliente->sexo }}</td>
                            <td>{{ $cliente->calle }}</td>
                            <td>
                                <!-- BOTON AZUL DE MODIFICAR -->
                                <a href="#">
                                    <button type="button" class="btn btn-primary btn-sm">
                                        {{-- <i class="fas fa-pen fa-sm text-white-50"></i> --}}
                                        <span>Modificar</span>
                                    </button>
                                </a>
                                <!-- BOTON AMARILLO VISUALIZAR -->
                                <a href="{{ route('clienteShow',['id' => $cliente->id_cliente]) }}">
                                    <button type="button" class="btn btn-warning btn-sm">
                                        <span>Detalle</span>
                                    </button>
                                </a>
                                <!-- BOTON ROJO ELIMINAR -->
                                <a href="{{ route('clienteDel',['id' => $cliente->id_cliente]) }}">
                                    <button class="btn btn-danger btn-sm"">
                                        <span>Eliminar</span>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</body>
<!-- BootStrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
