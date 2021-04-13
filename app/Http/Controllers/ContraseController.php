<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Paciente;

class ContraseController extends Controller
{
    //valida contraseña que envia con una contraseña por defecto = '$2y$10$vml2vjR96hDCGpO1SESeA.qC2q31VftxVLA0r.CDc6SEumX1Hoq3K'
    public function ValidarC(Request $request){
   
    if (Hash::check($request->contrasena,  '$2y$10$vml2vjR96hDCGpO1SESeA.qC2q31VftxVLA0r.CDc6SEumX1Hoq3K')) {
        //retorna el registro segun documento digitado   
        $pacientes = Paciente::where("documento","=",$request->documento)->paginate(5);

        if(count($pacientes)>0){
          //si hay resultado muestra la tabla con registro del paciente o cliente
           return view('cliente.tablaCliente',compact('pacientes'));
        }else{
          // Si no exite o no tiene resultado, retorna un mensaje
           return redirect('cliente')->with('noRegistroPaciente','ok');
        }  

    }else{
       // si el paciente o cliente no existe
      return redirect('cliente')->with('validarPaciente','ok');
      
    }
  }
}