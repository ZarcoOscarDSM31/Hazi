<?php

namespace App\Http\Controllers;

use App\Models\direccion;
use Illuminate\Http\Request;

class DireccionController extends Controller
{
    //------------------------------ Lógica: LISTA DE DIRECCIÓN -------------------------------------
    public function direccionIndex() {
        $query = direccion::all();
        return view('/direccion/direccionIndex')
        ->with(['direccion' => $query]);
    }

    //------------------------------ Lógica: DETALLE DE DIRECCIÓN -------------------------------------
    public function direccionShow($id){
        $query = direccion::find($id);
        return view('/direccion/direccionShow')
        ->with(['direccionShow' => $query]);
    }

    //------------------------------ Lógica: ELIMINAR DIRECCIÓN -------------------------------------
    public function direccionDel(direccion $id){
        $id->delete();
        return redirect()->route('direccionIndex');
    }

    //------------------------------ Lógica: ALTA DE DIRECCIÓN -------------------------------------
    public function direccionAdd(){
        return view("/direccion/direccionAdd");
    }

    public function direccionReg(Request $request){
        $this->validate($request,[
            'calle' => 'required',
            'no_exterior' => 'required',
            'cop' => 'required',
        ]);

        direccion::create(array(
            'calle' => $request->input('calle'),
            'no_interior' => $request->input('no_interior'),
            'no_exterior' => $request->input('no_exterior'),
            'cop' => $request->input('cop'),
        ));

        return redirect()->route('direccionIndex');
    }
}
