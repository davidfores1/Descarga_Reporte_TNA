<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Descarga;


class ContarController extends Controller
{
    //Envia 1 cantidad cada vez que se da clic en descarga
    public function contarDescarga(Request $request){

        $descarga = new Descarga();
        $descarga->create([
            'cantidad' => 1,
        ]);
       
    }

    //realiza la suma de las cantidades  y retorna el total
    public function mostrarCanDescarga(){

        $descargaRes = Descarga::sum('cantidad');

       return $descargaRes;

    }
}
