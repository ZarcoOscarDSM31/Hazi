<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MENÚ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<H1 style="text-align: center">MENÚ</H1>
<div class="card">
    <div class="card-body" >
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="card shadow col-md-2" id="carta">
                <a href="{{ route('direccionIndex') }}" >
                    <button type="button" class="btn btn-primary btn-sm">Direcciones</button>
                </a>
            </div>
            <div class="card shadow col-md-2" id="carta">
                <a href="{{ route('clienteIndex') }}">
                    <button type="button" class="btn btn-primary btn-sm">Clientes</button>
                </a>
            </div>
            <div class="card shadow col-md-2" id="carta">
                <a href="{{ route('destinoIndex') }}">
                    <button type="button" class="btn btn-primary btn-sm">Destinos</button>
                </a>
            </div>
            <div class="card shadow col-md-2" id="carta">
                <a href="{{ route('boletosIndex') }}">
                    <button type="button" class="btn btn-primary btn-sm">Boletos</button>
                </a>
            </div>
            <div class="card shadow col-md-2" id="carta">
                <a href="{{ route('transporteIndex') }}">
                    <button type="button" class="btn btn-primary btn-sm">Transportes</button>
                </a>
            </div>
        </div>
        <br>
    </div>
</div>
<style>
    #carta{
        position: relative;
        justify-content: center;
        display: flex;
        text-align: center;
        align-items:center;
        margin-left:50px;
        width:130px;
        height:70px;
    };
    #boton{
        display: inline-block;

    }
</style>
</body>
</html>
