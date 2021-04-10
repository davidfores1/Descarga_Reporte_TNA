<?php

namespace App\Imports;

use App\Models\Paciente;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Validators\Failure;

class PacientesImport implements ToModel,WithHeadingRow,WithValidation
{
    private $numRows = 0;

    use Importable;

    public function rules(): array
{
    return [
        '*.cod_interno' => 'required|unique:pacientes,cod_interno',
        'documento' => 'required|int',
        'nombre' => 'required',
        'edad' => 'required|int',
        'fecha_recepcion'  => ['required','regex:/^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[13-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/'],
        'hospital'  => 'required'
    ];
}

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $user = Auth::user();
        $usuario = $user->name;

        ++$this->numRows;
        return new Paciente([
            'cod_interno'  => $row['cod_interno'],
            'documento'  => $row['documento'],
            'nombre' => $row['nombre'],
            'edad'  => $row['edad'],
            'fecha_recepcion'  => $row['fecha_recepcion'],
            'hospital'  => $row['hospital'],
            'usuario_sistema' => $usuario,
        ]);
    }
    
    public function getRowCount(): int
    {
        return $this->numRows;
    }

}
