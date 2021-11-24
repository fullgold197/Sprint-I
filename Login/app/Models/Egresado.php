<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egresado extends Model
{

    public $table = "egresado"; // hace referencia a la tabla cliente de la bd
    public $primaryKey = "matricula";
    public $filiable = [
        'ap_paterno', 'ap_materno', 'nombres','genero','fecha_nacimiento',
        'telefono','Provincia','Distrito','habilitado', 'primer_empleo_id','id_academico',
        'id_profesion', 'direccion_actual', 'habilitado', 'primer_empleo_id', 'created_at', 'updated_at'
    ];
    public $timestamps = false;
    //use HasFactory;
}
