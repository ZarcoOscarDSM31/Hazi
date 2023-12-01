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

    //------------------------------ Lógica: ALTA DE TRANSPORTE -------------------------------------
    public function transporteAdd(){
        $query = \DB::select("SELECT tb_transporte.`fk_id_destino`,tb_destino.`destino`
        FROM tb_transporte
        INNER JOIN `tb_destino` ON `id_destino`=fk_id_destino");
        return view("/transporte/transporteAdd")
        ->with(['transporteA' => $query]);
    }

    public function transporteReg(Request $request){
        $this->validate($request,[
            'capacidad' => 'required',
            'peso' => 'required',
            'no_asiento' => 'required',
        ]);

        transporte::create(array(
            'capacidad' => $request->input('capacidad'),
            'peso' => $request->input('peso'),
            'no_asiento' => $request->input('no_asiento'),
            'fk_id_destino' => $request->input('fk_id_destino'),
        ));

        return redirect()->route('transporteIndex');
    }

    //------------------------------ Lógica: EDITAR TRANSPORTE -------------------------------------
    public function transporteEdit($id){
        $query = transporte::find($id);
        return view("/transporte/transporteEdit")
        ->with(['transporteEdit' => $query]);
    }


    public function transporteSalvar(transporte $id, Request $request){
        $query = transporte::find($id->id_transporte);
            $query -> capacidad = $request -> capacidad;
            $query -> peso = $request -> peso;
            $query -> no_asiento = $request -> no_asiento;
            $query -> fk_id_destino = $request -> fk_id_destino;
        $query->save();

        return redirect()->route("transporteIndex", ['id' => $id->id_transporte]);
    }
}
