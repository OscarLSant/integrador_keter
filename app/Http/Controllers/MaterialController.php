<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaterialController extends Controller
{
    //
    public function index(){
        return "Hola desde la vista Material";
    }

    /*
    public function store(StoreMaterialRequest $request){
        $request->validate([
            'material'   => 'required'
        ]);
        return redirect()->route('material.index');
    }
    */ 
}
