<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductionOrderController extends Controller
{
    //
    public function index(){
        return "Hola desde la vista ProductionOrder";
    }

    /*
    public function store(StoreProductionRequest $request){
        $request->validate([
            'cantidad'   => 'required',
            'descripcion' => 'required',
            'fechaRegistro'   => 'required',
            'fechaCaptura' => 'required',
            'fechaEntrega'   => 'required',
            'domicilioEntrega'    => 'required',
            'domicilioEnvio'    => 'required',
        ]);
        return redirect()->route('production.index');
    }
    */ 
}
