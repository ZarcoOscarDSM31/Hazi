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
}
