<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Persona;

class ContraController extends Controller
{
    public function ValidarC(Request $request){
   
    if (Hash::check($request->contrasena,  '$2y$10$vml2vjR96hDCGpO1SESeA.qC2q31VftxVLA0r.CDc6SEumX1Hoq3K')) {
        $personas = Persona::all();
        return view('cliente.tablaCliente',compact('personas'));

    }else{
        return 201;
    }
}
}
