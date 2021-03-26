<?php

namespace App\Imports;

use App\Models\Paciente;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Validators\Failure;

class PacientesImport implements 
ToModel, 
WithHeadingRow, 
SkipsOnError, 
WithValidation, 
SkipsOnFailure
{
    private $numRows = 0;

    use Importable, SkipsErrors, SkipsFailures;

    public function rules(): array
{
    return [
        'documento' => 'required|int',
        'nombre' => 'required',
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
            'documento'  => $row['documento'],
            'nombre' => $row['nombre']
        ]);
    }
    
    public function getRowCount(): int
    {
        return $this->numRows;
    }

}
