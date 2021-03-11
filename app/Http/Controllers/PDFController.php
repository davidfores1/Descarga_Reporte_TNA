<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PDFController extends Controller
{
    public function show($id){

        $personas = Persona::findOrFail($id);

    

        // if($personas->documento == 54645678){

        //     $personas->documento = "img/Asoclinic.png";

        // }else{

        //     $personas->documento = "img/paypal.png";
        // }


        $pdf =\PDF::loadView('descargarPDF/descargarPDF',compact('personas'));
        $pdf -> setPaper ( 'A4' , 'landscape' );
        return $pdf->download('descargar.pdf');

       
    }

}