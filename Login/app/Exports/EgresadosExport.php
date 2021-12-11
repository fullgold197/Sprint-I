<?php

namespace App\Exports;

use App\Models\egresado;
use Maatwebsite\Excel\Concerns\FromCollection;

class EgresadosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return egresado::select('matricula','ap_paterno','ap_materno','nombres', 'genero', 'fecha_nacimiento', 'telefono','Provincia','Distrito')->get();
    }
}
