<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{
    public function index()
    {
      
        // $documento = $request->get('documento');
        // $nombre = $request->get('nombre');

        // $usuario = User::orderBy('id','ASC')
        // ->documento($documento)
        // ->nombre($nombre)
        // ->paginate(3);
       $datos['usuarios']=User::paginate(5);
        return view('usuario.index',$datos);
        // return view('persona.index',compact('usuarios'));
    }

    public function showForm()
    {
        return view('Auth.register');
    }

}
