<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function PDF(){
        $pdf =\PDF::loadView('descargarPDF/descargarPDF');
        return $pdf->download('descargar.pdf');
    }
}
