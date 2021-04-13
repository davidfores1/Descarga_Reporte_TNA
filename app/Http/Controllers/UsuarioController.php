<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{

    //vista de pacientes
    public function index(Request $request)
    {

        $name = $request->get('name');
        $email = $request->get('email');

        $usuarios = User::orderBy('created_at','ASC')   
        ->name($name)
        ->email($email)
        ->paginate(5);   
        return view('usuario.index',compact('usuarios'));
    }
     
    // Redireciona a la vista de registro que se encuentra en la carpeta Auth
    public function showForm()
    {
        return view('auth.register');
    }

    //crear usuario
    public function create(Request $request)
    {
        // valida si exite el registro
        $v = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
        ]);

        $usuario = new User();
        $usuario->create([
            'name' => $request['name'],
            'email' => $request['email'],
            'id_rol' => $request['id_rol'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect('usuario')->with('crearUsuario','ok');
        
    }

    //realizar la consulta el id enviado y retornar sus registros
    public function edit($id){

        $usuario = User::findOrFail($id);
        return view('usuario.edit',compact('usuario'));

    }

    //editar usuario
    public function update(Request $request, $id){

        $datosUsuario = $request->except(['_token','_method']);
        User::where('id','=',$id)->update($datosUsuario);
        return redirect('usuario')->with('editarUsuario','ok');

    }

    // Eliminar usuario
    public function destroy($id){
        User::destroy($id);
        return redirect('usuario');
    }

}