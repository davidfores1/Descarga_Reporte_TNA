<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Paciente;

class ContraseController extends Controller
{
    public function ValidarC(Request $request){
   
    if (Hash::check($request->contrasena,  '$2y$10$vml2vjR96hDCGpO1SESeA.qC2q31VftxVLA0r.CDc6SEumX1Hoq3K')) {
        $pacientes = Paciente::all();
        $pacientes = Paciente::where("documento","=",$request->documento)->paginate(5);
        return view('cliente.tablaCliente',compact('pacientes'));

    }else{
      return redirect('cliente')->with('validarPaciente','ok');
    }
}
}
