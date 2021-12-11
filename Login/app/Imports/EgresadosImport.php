<?php

namespace App\Imports;

use App\Models\egresado;
use Maatwebsite\Excel\Concerns\ToModel;

class EgresadosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new egresado([
            //
            'matricula'             =>$row['0'],
            'ap_paterno'            =>$row['1'],
            'ap_materno'            =>$row['2'],
            'nombres'               =>$row['3'],
            'genero'                =>$row['4'],
            'fecha_nacimiento'      =>$row['5'],
            'telefono'              =>$row['6'],
            'Provincia'             =>$row['7'],
            'Distrito'              =>$row['8']

        ]);
    }
}
