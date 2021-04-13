<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PacientesImport;
use App\Exports\PacientesExportar;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //para poder filtrar, query scope metodos del modelo estan en la espera, si no hay filtro retorna todo los datos 
        $cod_interno = $request->get('cod_interno');
        $documento = $request->get('documento');
        $nombre = $request->get('nombre');

        $pacientes = Paciente::orderBy('created_at','DESC')
        ->cod_interno($cod_interno)
        ->documento($documento)
        ->nombre($nombre)
        ->paginate(5);
        return view('paciente.index',compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //crea el registro paciente
    public function store(Request $request)
    {

        $user = Auth::user();
        $usuario = $user->name;
        // valida datos
        $validated = $request->validate([
            'cod_interno' => 'required|unique:pacientes',
            'documento' => 'required|int',
            'nombre' => 'required',
            'edad' => 'required|int',
            'fecha_recepcion' => 'required',
            'hospital' => 'required',
        ]);

        //crear datos
        $datosPacientes = new Paciente();
        $datosPacientes->create([
            'cod_interno' => $request['cod_interno'],
            'documento' => $request['documento'],
            'nombre' => $request['nombre'],
            'edad' => $request['edad'],
            'fecha_recepcion' => $request['fecha_recepcion'],
            'hospital' => $request['hospital'],
            'usuario_sistema' => $usuario
        ]);
        return redirect('paciente')->with('crearPaciente','ok');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */

     //se envia el id, obtener los registros del cliente o paciente seleccionado
    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('paciente.edit',compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */

    //  editar paciente seleccionado, recibe el id y sus demas campos
    public function update(Request $request,$id)
    {
        $datosPaciente = request()->except(['_token','_method']);
        Paciente::where('id','=',$id)->update($datosPaciente);
        return redirect('paciente')->with('editarPaciente','ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */

    // Eliminar paciente o cliente seleccionado
    public function destroy($id)
    {
        Paciente::destroy($id);
        return redirect('paciente');
    }

    // ver vista Cargar Pacientes
    public function showCargarPacientes(){

        return view('paciente.cargarPaciente');

    }

    // Importar pacientes que son cargados por el archivo excel.csv
    public function importPacientes(Request $request){

        $file = $request->file('file');
        $import = new PacientesImport;
        $import->import($file);

        return view('paciente.cargarPaciente',['numRows'=>$import->getRowCount()]);

    }
     
    //metodo para descargar plantilla para el cargue, este archivo se debe guardar con extencion .csv
    public function exportPacientes() 
    {
    return Excel::download(new PacientesExportar, 'Plantillla.xlsx');
    }

}