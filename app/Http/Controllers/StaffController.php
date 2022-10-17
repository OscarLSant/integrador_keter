<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    //
    public function index(){
        return "Hola desde la vista Staff";
    }

    /*
    public function store(StoreStaffRequest $request){
        $request->validate([
            'numeroTrabajador'   => 'required',
            'nombre' => 'required',
            'apellidoPaterno'   => 'required',
            'apellidoMaterno' => 'required',
            'RFC'   => 'required',
            'CURP'    => 'required',
            'NSS'    => 'required',
            'NSSA'  => 'required',
            'fechaIngresoAuditoria'    => 'required',
            'fechaIngreso'    => 'required',
            'sexo'  => 'required',
            'fechaNacimiento' => 'required',
            'estadoSalud'    => 'required',
            'observaciones'    => 'required',
            'telefonoContacto'    => 'required',
            'correoElectronico'    => 'required',
            'estatus'    => 'required'
        ]);
        return redirect()->route('staff.index');
    }
    */ 
}
