<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index(){
        return "Hola desde la vista Customer";
    }

    /*
    public function store(StoreCustomerRequest $request){
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
        return redirect()->route('customer.index');
    }
    */ 
}
