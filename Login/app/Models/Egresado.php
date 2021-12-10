<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egresado extends Model
{

    public $table = "egresado"; // hace referencia a la tabla cliente de la bd
    public $primaryKey = "matricula";
    public $fillable = [
        'ap_paterno', 'ap_materno', 'nombres','genero','fecha_nacimiento',
        'telefono','Provincia','Distrito','url','habilitado', 'primer_empleo_id','id_academico',
          'created_at','updated_at'
    ];
    public $timestamps = false;
    //use HasFactory;
   
}
