<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index(Request $request)
    {
      
        $name = $request->get('name');
        $email = $request->get('email');

        $usuarios = User::orderBy('id','ASC')
        ->name($name)
        ->email($email)
        ->paginate(5);
    //    $datos['usuarios']=User::paginate(5);
    //     return view('usuario.index',$datos);
        return view('usuario.index',compact('usuarios'));
    }

    public function showForm()
    {
        return view('Auth.register');
    }

    public function create(Request $request)
    {
        $v = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
        ]);

        $usuario = new User();
        $usuario->create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect('usuario')->with('crearUsuario','ok');
        
    }

    public function edit($id){

        $usuario = User::findOrFail($id);
        return view('usuario.edit',compact('usuario'));

    }

    public function update(Request $request, $id){

        $datosUsuario = $request->except(['_token','_method']);
        User::where('id','=',$id)->update($datosUsuario);
        return redirect('usuario')->with('crearUsuario','ok');

    }

    public function destroy($id){
        User::destroy($id);
        return redirect('usuario');
    }


}
