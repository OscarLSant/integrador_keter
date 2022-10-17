<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        return "Hola desde la vista User";
    }

    /*
    public function store(StoreChemicalRequest $request){
        $request->validate([
            'nombreUsuario'                => 'required',
            'contraseñaUsuario'            => 'required'
        ]);
        return redirect()->route('chemical.index');
    }
    */ 
}
