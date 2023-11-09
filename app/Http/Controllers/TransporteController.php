<?php

namespace App\Http\Controllers;

use App\Models\transporte;
use Illuminate\Http\Request;

class TransporteController extends Controller
{
    //------------------------------ Lógica: LISTA DE DESTINO -------------------------------------
    public function transporteIndex() {
        $query = \DB::select("SELECT tb_transporte.`id_transporte`,tb_transporte.`capacidad`,tb_transporte.`peso`,tb_transporte.`no_asiento`,tb_destino.`destino`
        FROM tb_transporte
        INNER JOIN `tb_destino` ON `id_destino`=fk_id_destino");
        return view('/transporte/transporteIndex')
        ->with(['transporte' => $query]);
    }

    //------------------------------ Lógica: DETALLE DE DESTINO -------------------------------------
    public function transporteShow($id){
        $query = transporte::find($id);
        return view('/transporte/transporteShow')
        ->with(['transporteShow' => $query]);
    }

    //------------------------------ Lógica: ELIMINAR TRANSPORTE -------------------------------------
    public function transporteDel(transporte $id){
        $id->delete();
        return redirect()->route('transporteIndex');
    }
}
