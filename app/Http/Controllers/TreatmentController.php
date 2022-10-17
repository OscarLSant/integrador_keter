<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    //
    public function index(){
        return "Hola desde la vista Treatment";
    }
    
    /*
    public function store(StoreTreatmentRequest $request){
        $request->validate([
            'nombreTratamiento'                => 'required',
            'tiempoTratamiento'            => 'required'
        ]);
        return redirect()->route('teatment.index');
    }
    */ 
}
