<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use Carbon\Carbon;

class PDFController extends Controller
{
    public function show($id){

        $pacientes = Paciente::findOrFail($id);

        // validacion, segun el valor del campo hospital, se ,muestra imagen de la clinica en el resultado descargado
        if(($pacientes->hospital == "B") || ($pacientes->hospital == "b")){

            $pacientes->hospital = "img/buenaventura.png";

        }elseif(($pacientes->hospital == "C") || ($pacientes->hospital == "c")){

            $pacientes->hospital = "img/cali.png";

        }elseif(($pacientes->hospital == "BU") || ($pacientes->hospital == "bu" or $pacientes->hospital == "Bu")){

            $pacientes->hospital = "img/buga.png";

        }elseif(($pacientes->hospital == "P") || ($pacientes->hospital == "p")){

            $pacientes->hospital = "img/palmira.png";
        }
        // fecha actual
        $fechaActual = Carbon::now();
        // descarga el resultado en pdf
        $pdf =\PDF::loadView('descargarPDF/descargarPDF',compact('pacientes' , 'fechaActual'));
        $pdf -> setPaper ( 'A4' , 'landscape' );
        return $pdf->download($pacientes->documento . '.pdf');
       
    }

}