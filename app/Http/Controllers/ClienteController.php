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
    //------------------------------ Lógica: ALTA DE CLIENTES -------------------------------------
    public function clienteAdd(){
        return view("/cliente/clienteAdd");
    }

    public function clienteReg(Request $request){
        $this->validate($request,[
            'calle' => 'required',
            'no_exterior' => 'required',
            'cop' => 'required',
        ]);

        cliente::create(array(
            'calle' => $request->input('calle'),
            'no_interior' => $request->input('no_interior'),
            'no_exterior' => $request->input('no_exterior'),
            'cop' => $request->input('cop'),
        ));

        return redirect()->route('clienteIndex');
    }
}
