<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctorado extends Model
{
    public $table = "doctorado"; // hace referencia a la tabla cliente de la bd
    public $primaryKey = "id_doctorado";
    public $filiable = [
        'grado_academico', 'pais', 'tipo_estudio', 'institución', 'fecha_inicial', 'fecha_final','id_academico','created_at', 'updated_at'
    ];
    public $timestamps = false;
}
