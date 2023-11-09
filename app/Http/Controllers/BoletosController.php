<?php

namespace App\Http\Controllers;

use App\Models\boletos;
use Illuminate\Http\Request;

class BoletosController extends Controller
{
    //------------------------------ Lógica: LISTA DE BOLETOS -------------------------------------
    public function boletosIndex() {
        $query = \DB::select("SELECT tb_boletos.`id_boletos`, tb_boletos.`precio`, tb_boletos.`fecha_compra`, tb_boletos.`fecha_salida`, CONCAT(tb_cliente.`app`,' ', tb_cliente.`apm`,', ',tb_cliente.`nombre`) as user, tb_destino.`destino`
        FROM tb_boletos
        INNER JOIN `tb_cliente` ON `id_cliente` = `fk_id_cliente`
        INNER JOIN `tb_destino` ON `id_destino` = `fk_id_destino`");
        return view('/boletos/boletosIndex')
        ->with(['boletos' => $query]);
    }

    //------------------------------ Lógica: DETALLE DE BOLETOS -------------------------------------
    public function boletosShow($id){
        $query = boletos::find($id);
        return view('/boletos/boletosShow')
        ->with(['boletosShow' => $query]);
    }

    //------------------------------ Lógica: ELIMINAR BOLETOS -------------------------------------
    public function boletosDel(boletos $id){
        $id->delete();
        return redirect()->route('boletosIndex');
    }
}
