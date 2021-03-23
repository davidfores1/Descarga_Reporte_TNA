<?php

namespace App\Imports;

use App\Models\Paciente;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PacientesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Paciente([
            'documento'  => $row['documento'],
            'nombre' => $row['nombre']
        ]);
    }
}
