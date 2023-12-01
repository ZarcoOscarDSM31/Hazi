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

    //------------------------------ Lógica: EDITAR DIRECCION -------------------------------------
    public function direccionEdit($id){
        $query = direccion::find($id);
        return view("/direccion/direccionEdit")
        ->with(['direccionEdit' => $query]);
    }

    public function direccionSalvar(direccion $id, Request $request){
        $query = direccion::find($id->id_direccion);
            $query -> calle = $request -> calle;
            $query -> no_interior = $request -> no_interior;
            $query -> no_exterior = $request -> no_exterior;
            $query -> cop = $request -> cop;
        $query->save();

        return redirect()->route("direccionIndex", ['id' => $id->id_direccion]);
    }
}
