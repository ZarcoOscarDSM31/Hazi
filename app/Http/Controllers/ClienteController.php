<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    //------------------------------ Lógica: LISTA DE CLIENTES -------------------------------------
    public function clienteIndex() {
        $query = \DB::select("SELECT tb_cliente.`id_cliente`, tb_cliente.`app`, tb_cliente.`apm`, tb_cliente.`nombre`, tb_cliente.`sexo`, tb_cliente.`fk_id_direccion`,tb_direccion.`calle`
        FROM tb_cliente
        INNER JOIN `tb_direccion` ON `id_direccion` = `fk_id_direccion`");
        return view('/cliente/clienteIndex')
        ->with(['cliente' => $query]);
    }

    //------------------------------ Lógica: VISTA DE CLIENTES -------------------------------------
    public function clienteShow($id){
        $query = cliente::find($id);
        return view('/cliente/clienteShow')
        ->with(['clienteShow' => $query]);
    }

    //------------------------------ Lógica: ELIMINAR CLIENTES -------------------------------------
    public function clienteDel(cliente $id){
        $id->delete();
        return redirect()->route('clienteIndex');
    }
    //------------------------------ Lógica: ALTA DE DIRECCIÓN -------------------------------------
    public function clienteAdd(){
        $query = \DB::select("SELECT tb_cliente.`sexo`,tb_cliente.`fk_id_direccion`,tb_direccion.`calle`
        FROM tb_cliente
        INNER JOIN `tb_direccion` ON `id_direccion`=fk_id_direccion");
        return view("/cliente/clienteAdd")
        ->with(['clienteA' => $query]);
    }

    public function clienteReg(Request $request){
        $this->validate($request,[
            'nombre' => 'required',
            'app' => 'required',
            'sexo' => 'required',
        ]);

        cliente::create(array(
            'nombre' => $request->input('nombre'),
            'app' => $request->input('app'),
            'apm' => $request->input('apm'),
            'sexo' => $request->input('sexo'),
            'fk_id_direccion' => $request->input('fk_id_direccion'),
        ));

        return redirect()->route('clienteIndex');
    }
    //------------------------------ Lógica: EDITAR CLIENTE -------------------------------------
    public function clienteEdit($id){
        $query = cliente::find($id);
        return view("/cliente/clienteEdit")
        ->with(['clienteEdit' => $query]);
    }

    public function clienteSalvar(cliente $id, Request $request){
        $query = cliente::find($id->id_cliente);
            $query -> nombre = $request -> nombre;
            $query -> app = $request -> app;
            $query -> apm = $request -> apm;
            $query -> sexo = $request -> sexo;
            $query -> fk_id_direccion = $request -> fk_id_direccion;
        $query->save();

        return redirect()->route("clienteIndex", ['id' => $id->id_cliente]);
    }

}
