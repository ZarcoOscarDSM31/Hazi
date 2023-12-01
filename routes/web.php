<?php

use App\Http\Controllers\BoletosController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\TransporteController;
use Database\Seeders\ClienteSeeder;
use Database\Seeders\DireccionSeeder;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::name('menu')->get('/', function () {
    return view('/menu');
});

                                    /* D I R E C C I O N */
    //-------------------------------Rutas: lista dirección---------------------------------------------
Route::name('direccionIndex')->get('/direccion/direccionIndex',[DireccionController::class,'direccionIndex']);

    //-------------------------------Rutas: Show dirección---------------------------------------------
Route::name('direccionShow')->get('/direccionShow/{id}',[DireccionController::class,'direccionShow']);

    //-------------------------------Rutas: Alta dirección---------------------------------------------
Route::name('direccionAdd')->get('/direccionAdd',[DireccionController::class, 'direccionAdd']);
Route::name('direccionReg')->post('/direccionReg',[DireccionController::class, 'direccionReg']);

    //-------------------------------Rutas: Editar dirección---------------------------------------------
Route::name('direccionEdit')->get('/direccionEdit/{id}',[DireccionController::class,'direccionEdit']);
Route::name('direccionSalvar')->put('/direccionSalvar/{id}',[DireccionController::class,'direccionSalvar']);

    //-------------------------------Rutas: Eliminar dirección---------------------------------------------
Route::name('direccionDel')->get('/direccionDel/{id}',[DireccionController::class,'direccionDel']);




                                    /* C L I E N T E S */
    //-------------------------------Rutas: lista clientes---------------------------------------------
Route::name('clienteIndex')->get('/cliente/clienteIndex',[ClienteController::class,'clienteIndex']);

    //-------------------------------Rutas: Show clientes---------------------------------------------
Route::name('clienteShow')->get('/clienteShow/{id}',[ClienteController::class,'clienteShow']);
/* Route::name('fkdirec')->get('/fkdirec/{id}',[ClienteController::class,'fkdirec']); */

    //-------------------------------Rutas: Alta clientes---------------------------------------------
Route::name('clienteAdd')->get('/clienteAdd',[ClienteController::class, 'clienteAdd']);
Route::name('clienteReg')->post('/clienteReg',[ClienteController::class, 'clienteReg']);

    //-------------------------------Rutas: Editar clientes---------------------------------------------
Route::name('clienteEdit')->get('/clienteEdit/{id}',[ClienteController::class,'clienteEdit']);
Route::name('clienteSalvar')->put('/clienteSalvar/{id}',[ClienteController::class,'clienteSalvar']);

    //-------------------------------Rutas: Eliminar clientes---------------------------------------------
Route::name('clienteDel')->get('/clienteDel/{id}',[ClienteController::class,'clienteDel']);




                                    /* D E S T I N O */
    //-------------------------------Rutas: lista destino---------------------------------------------
Route::name('destinoIndex')->get('/destino/destinoIndex',[DestinoController::class,'destinoIndex']);

    //-------------------------------Rutas: Show destino---------------------------------------------
Route::name('destinoShow')->get('/destinoShow/{id}',[DestinoController::class,'destinoShow']);

    //-------------------------------Rutas: Alta destino---------------------------------------------
Route::name('destinoAdd')->get('/destinoAdd',[DestinoController::class, 'destinoAdd']);
Route::name('destinoReg')->post('/destinoReg',[DestinoController::class, 'destinoReg']);

    //-------------------------------Rutas: Editar destino---------------------------------------------
Route::name('destinoEdit')->get('/destinoEdit/{id}',[DestinoController::class,'destinoEdit']);
Route::name('destinoSalvar')->put('/destinoSalvar/{id}',[DestinoController::class,'destinoSalvar']);

    //-------------------------------Rutas: Eliminar destino---------------------------------------------
Route::name('destinoDel')->get('/destinoDel/{id}',[DestinoController::class,'destinoDel']);




                                    /* T R A N S P O R T E */
    //-------------------------------Rutas: lista transporte---------------------------------------------
Route::name('transporteIndex')->get('/transporte/transporteIndex',[TransporteController::class,'transporteIndex']);

    //-------------------------------Rutas: Show transporte---------------------------------------------
Route::name('transporteShow')->get('/transporteShow/{id}',[TransporteController::class,'transporteShow']);

    //-------------------------------Rutas: Alta transporte---------------------------------------------
Route::name('transporteAdd')->get('/transporteAdd',[TransporteController::class, 'transporteAdd']);
Route::name('transporteReg')->post('/transporteReg',[TransporteController::class, 'transporteReg']);

    //-------------------------------Rutas: Editar transporte---------------------------------------------
Route::name('transporteEdit')->get('/transporteEdit/{id}',[TransporteController::class,'transporteEdit']);
Route::name('transporteSalvar')->put('/transporteSalvar/{id}',[TransporteController::class,'transporteSalvar']);

    //-------------------------------Rutas: Eliminar transporte---------------------------------------------
Route::name('transporteDel')->get('/transporteDel/{id}',[TransporteController::class,'transporteDel']);




                                    /* B O L E T O S */
    //-------------------------------Rutas: lista boletos---------------------------------------------
Route::name('boletosIndex')->get('/boletos/boletosIndex',[BoletosController::class,'boletosIndex']);

    //-------------------------------Rutas: Show boletos---------------------------------------------
Route::name('boletosShow')->get('/boletosShow/{id}',[BoletosController::class,'boletosShow']);

    //-------------------------------Rutas: Alta boletos---------------------------------------------
Route::name('boletosAdd')->get('/boletosAdd',[BoletosController::class, 'boletosAdd']);
Route::name('boletosReg')->post('/boletosReg',[BoletosController::class, 'boletosReg']);

    //-------------------------------Rutas: Editar boletos---------------------------------------------
Route::name('boletosEdit')->get('/boletosEdit/{id}',[BoletosController::class,'boletosEdit']);
Route::name('boletosSalvar')->put('/boletosSalvar/{id}',[BoletosController::class,'boletosSalvar']);

    //-------------------------------Rutas: Eliminar boletos---------------------------------------------
Route::name('boletosDel')->get('/boletosDel/{id}',[BoletosController::class,'boletosDel']);


