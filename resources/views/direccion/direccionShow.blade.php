<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dirección Detalle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <br>
    <h2>Dirección</h2>
    <hr>

    <!--BOTÓN DE VOLVER -->
    <div class="row"  >
        <div class="col-md-11">
        </div>
        <div class="col-md-1">
            <a href="{{ route('direccionIndex') }}">
                <button type="button" class="btn btn-primary">
                    <span>Volver</span>
                </button>
            </a>
        </div>
    </div>
    <br>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="50%" {{-- cellspacing="120" --}}>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Calle</th>
                                <th>Número Interior</th>
                                <th>Número Exterior</th>
                                <th>Código Postal</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <td>{{ $direccionShow->id_direccion }}</td>
                                <td>{{ $direccionShow->calle }}</td>
                                <td>{{ $direccionShow->no_interior }}</td>
                                <td>{{ $direccionShow->no_exterior }}</td>
                                <td>{{ $direccionShow->cop }}</td>
                            </tr>
                        </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
