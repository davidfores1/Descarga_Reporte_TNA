<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PDFController extends Controller
{
    public function show($id){

        $pacientes = Paciente::findOrFail($id);

        if($pacientes->hospital == "B"){

            $pacientes->hospital = "img/buenaventura.png";

        }elseif($pacientes->hospital == "C"){

            $pacientes->hospital = "img/cali.png";

        }elseif($pacientes->hospital == "BU"){

            $pacientes->hospital = "img/buga.png";

        }elseif($pacientes->hospital == "P"){

            $pacientes->hospital = "img/palmira.png";
        }


        $pdf =\PDF::loadView('descargarPDF/descargarPDF',compact('pacientes'));
        $pdf -> setPaper ( 'A4' , 'landscape' );
        return $pdf->download($pacientes->documento . '.pdf');
       
    }

}