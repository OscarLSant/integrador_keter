<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColorController extends Controller
{
    //
    public function index(){
        return "Hola desde la vista Color";
    }

    /*
    public function store(StoreColorRequest $request){
        $request->validate([
            'color'                 => 'required',
            'abreviatura'           => 'required',
            'nombre'                => 'required',
        ]);
        return redirect()->route('color.index');
    }
    */ 
}
