<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChemicalController extends Controller
{
    //
    public function index(){
        return "Hola desde la vista Chemical";
    }
    

    /*
    public function index(){
        return view('chemical.index');
    }

    public function store(StoreChemicalRequest $request){
        $request->validate([
            'nombre'                => 'required',
            'fabricante'            => 'required',
            'descripcion'           => 'required',
            'cantidadDisponible'    => 'required',
        ]);
        return redirect()->route('chemical.index');
    }
    */ 
}

