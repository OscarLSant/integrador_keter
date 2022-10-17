<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantController extends Controller
{
    //
    public function index(){
        return "Hola desde la vista Plant";
    }

    /*
    public function store(StorePlantRequest $request){
        $request->validate([
            'planta'   => 'required',
            'alias' => 'required',
            'responsable'   => 'required',
            'telefono' => 'required',
            'domicilio'   => 'required',
        ]);
        return redirect()->route('plant.index');
    }
    */ 
}
