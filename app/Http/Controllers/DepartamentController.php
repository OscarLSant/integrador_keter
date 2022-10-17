<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentController extends Controller
{
    //
    public function index(){
        return "Hola desde la vista Departament";
    }

    /*
    public function store(StoreDepartamentRequest $request){
        $request->validate([
            'nombre'   => 'required'
        ]);
        return redirect()->route('departament.index');
    }
    */ 
}
