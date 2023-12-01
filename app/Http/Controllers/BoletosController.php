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

    //------------------------------ Lógica: ALTA DE BOLETOS -------------------------------------
    public function boletosAdd(){
        $query = \DB::select("SELECT tb_boletos.`id_boletos`, tb_boletos.`precio`, tb_boletos.`fecha_compra`, tb_boletos.`fecha_salida`, CONCAT(tb_cliente.`app`,' ', tb_cliente.`apm`,', ',tb_cliente.`nombre`) as user, tb_destino.`destino`
        FROM tb_boletos
        INNER JOIN `tb_cliente` ON `id_cliente` = `fk_id_cliente`
        INNER JOIN `tb_destino` ON `id_destino` = `fk_id_destino`");
        return view("/boletos/boletosAdd")
        ->with(['boletosA' => $query]);;
    }

    public function boletosReg(Request $request){
        $this->validate($request,[
            'precio' => 'required',
            'fecha_compra' => 'required',
            'fecha_salida' => 'required',
        ]);

        boletos::create(array(
            'precio' => $request->input('precio'),
            'fecha_compra' => $request->input('fecha_compra'),
            'fecha_salida' => $request->input('fecha_salida'),
            'fk_id_cliente' => $request->input('fk_id_cliente'),
            'fk_id_destino' => $request->input('fk_id_destino'),
        ));

        return redirect()->route('boletosIndex');
    }
    //------------------------------ Lógica: EDITAR BOLETOS -------------------------------------
    public function boletosEdit($id){
        $query = boletos::find($id);
        return view("/boletos/boletosEdit")
        ->with(['boletosEdit' => $query]);
    }

    public function boletosSalvar(boletos $id, Request $request){
        $query = boletos::find($id->id_boletos);
            $query -> precio = $request -> precio;
            $query -> fecha_compra = $request -> fecha_compra;
            $query -> fecha_salida = $request -> fecha_salida;
            $query -> fk_id_cliente = $request -> fk_id_cliente;
            $query -> fk_id_destino = $request -> fk_id_destino;
        $query->save();

        return redirect()->route("boletosIndex", ['id' => $id->id_boletos]);
    }
}
