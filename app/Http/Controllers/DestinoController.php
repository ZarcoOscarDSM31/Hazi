<?php

namespace App\Http\Controllers;

use App\Models\destino;
use Illuminate\Http\Request;

class DestinoController extends Controller
{
    //------------------------------ Lógica: LISTA DE DESTINO -------------------------------------
    public function destinoIndex() {
        $query = destino::all();
        return view('/destino/destinoIndex')
        ->with(['destino' => $query]);
    }

    //------------------------------ Lógica: DETALLE DE DESTINO -------------------------------------
    public function destinoShow($id){
        $query = destino::find($id);
        return view('/destino/destinoShow')
        ->with(['destinoShow' => $query]);
    }

    //------------------------------ Lógica: ELIMINAR DESTINO -------------------------------------
    public function destinoDel(destino $id){
        $id->delete();
        return redirect()->route('destinoIndex');
    }
    //------------------------------ Lógica: ALTA DE DESTINO -------------------------------------
    public function destinoAdd(){
        return view("/destino/destinoAdd");
    }

    public function destinoReg(Request $request){
        $this->validate($request,[
            'destino' => 'required',
        ]);

        destino::create(array(
            'destino' => $request->input('destino'),
        ));

        return redirect()->route('destinoIndex');
    }

    //------------------------------ Lógica: EDITAR DESTINO -------------------------------------
    public function destinoEdit($id){
        $query = destino::find($id);
        return view("/destino/destinoEdit")
        ->with(['destinoEdit' => $query]);
    }

    public function destinoSalvar(destino $id, Request $request){
        $query = destino::find($id->id_destino);
            $query -> destino = $request -> destino;
        $query->save();

        return redirect()->route("destinoIndex", ['id' => $id->id_destino]);
    }
}
