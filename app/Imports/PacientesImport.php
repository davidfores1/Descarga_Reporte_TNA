<?php

namespace App\Imports;

use App\Models\Paciente;
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
        'fecha_recepcion'  => 'required',
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

        ++$this->numRows;
        return new Paciente([
            'cod_interno'  => $row['cod_interno'],
            'documento'  => $row['documento'],
            'nombre' => $row['nombre'],
            'edad'  => $row['edad'],
            'fecha_recepcion'  => $row['fecha_recepcion'],
            'hospital'  => $row['hospital']
        ]);
    }
    
    public function getRowCount(): int
    {
        return $this->numRows;
    }

}
