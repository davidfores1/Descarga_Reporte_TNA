<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PDFController extends Controller
{
    public function show($id){

        $pacientes = Paciente::findOrFail($id);

        $pdf =\PDF::loadView('descargarPDF/descargarPDF',compact('pacientes'));
        $pdf -> setPaper ( 'A4' , 'landscape' );
        return $pdf->download($pacientes->documento . '.pdf');

       
    }

}