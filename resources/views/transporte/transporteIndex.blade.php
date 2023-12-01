<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transportes</title>
     <!-- BootStrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <!-- JQuery -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
     <!-- DataTables -->
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css.css">
     <!-- Responsive -->
     <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
 </head>
</head>
<body class="container">
    <br>
    <h2 style="text-align:center">Lista de transportes</h2>
    <hr>

    <!-- BOTONES DE NAVEGACIÓN -->
    <div class="row"  >
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
            <a href="{{ route('clienteIndex') }}">
                <button type="button" class="btn btn-primary btn-sm">Clientes</button>
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
            <a href="{{ route('transporteAdd') }}">
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
<div class="row">
    <div class="card shadow">
        <div class="card-body">
            <table class="table table-hover"  id="transporte">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Capacidad</td>
                        <td>Peso</td>
                        <td>Número de asiento</td>
                        <td>Destino</td>
                        <td class="position-relative px-5">Operaciones</td>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($transporte as $transporte)
                    <tr>
                        <td>{{ $transporte->id_transporte }}</td>
                        <td>{{ $transporte->capacidad }}</td>
                        <td>{{ $transporte->peso }}</td>
                        <td>{{ $transporte->no_asiento }}</td>
                        <td>{{ $transporte->destino }}</td>
                        <td>
                            <!-- BOTON AZUL DE MODIFICAR -->
                            <a href="{{ route('transporteEdit',['id' => $transporte->id_transporte]) }}">
                                <button type="button" class="btn btn-primary btn-sm">
                                    {{-- <i class="fas fa-pen fa-sm text-white-50"></i> --}}
                                    <span>Modificar</span>
                                </button>
                            </a>
                            <!-- BOTON AMARILLO VISUALIZAR -->
                            <a href="{{ route('transporteShow',['id' => $transporte->id_transporte]) }}">
                                <button type="button" class="btn btn-warning btn-sm">
                                    <span>Detalle</span>
                                </button>
                            </a>
                            <!-- BOTON ROJO ELIMINAR -->
                            <a href="{{ route('transporteDel',['id' => $transporte->id_transporte]) }}">
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
</body>
<!-- BootStrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<!-- DataTables -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<!-- Responsive -->
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
<script>
    $(document).ready(function(){
        $('#transporte').DataTable({
            responsive: true,
            autoWidth: false,
            "language": {
            "lengthMenu": "Mostrar "+
                                    `<select class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="-1" selected>Todos</option>
                                    </select>`
                                    +" Registros",
            "zeroRecords": "Ningún registro encontrado",
            "info": "Mostrado la página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros válidos",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search": "Buscar:",
            "paginate": {
                'next': "Siguiente",
                'previous': "Anterior"
            }
        }

        });

    });
</script>
</html>
