<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Descarga;


class ContarController extends Controller
{
    public function contarDescarga(Request $request){

        $descarga = new Descarga();
        $descarga->create([
            'cantidad' => 1,
        ]);
       
    }

    public function mostrarCanDescarga(){

        $descargaRes = Descarga::sum('cantidad');

       return $descargaRes;

    }
}
