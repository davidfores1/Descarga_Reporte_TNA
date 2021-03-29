<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PDFController extends Controller
{
    public function show($id){

        $pacientes = Paciente::findOrFail($id);

        if($pacientes->hospital == "Buenaventura"){

            $pacientes->hospital = "img/buenaventura.png";

        }elseif($pacientes->hospital == "Cali"){

            $pacientes->hospital = "img/cali.png";

        }elseif($pacientes->hospital == "Buga"){

            $pacientes->hospital = "img/buga.png";

        }elseif($pacientes->hospital == "Palmira"){

            $pacientes->hospital = "img/palmira.png";

        }


        $pdf =\PDF::loadView('descargarPDF/descargarPDF',compact('pacientes'));
        $pdf -> setPaper ( 'A4' , 'landscape' );
        return $pdf->download($pacientes->documento . '.pdf');
       
    }

}