<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PositionController extends Controller
{
    //
    public function index(){
        return "Hola desde la vista Position";
    }

        /*
    public function store(StoreChemicalRequest $request){
        $request->validate([
            'razonSocial'   => 'required',
            'alias' => 'required',
            'RFC'   => 'required',
            'calle' => 'required',
            'colonia'   => 'required',
            'numeroExterior'    => 'required',
            'numeroInterior'    => 'required',
            'correoPostal'  => 'required',
            'ciudad'    => 'required',
            'estado'    => 'required',
            'telefono'  => 'required',
            'correoElectronico' => 'required',
            'direccionCorreoAlternativa'    => 'required',
            
        ]);
        return redirect()->route('chemical.index');
    }
    */ 
}
