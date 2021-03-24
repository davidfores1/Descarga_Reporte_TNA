<?php

namespace App\Exports;

use App\Models\Paciente;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

// use Maatwebsite\Excel\Concerns\FromCollection;

class PacientesExportar implements FromView
// FromCollection
{
    public function view(): View
    {
        return view('paciente.exportPacientes', [
            'pacientes' => Paciente::all()
        ]);
    }
}
