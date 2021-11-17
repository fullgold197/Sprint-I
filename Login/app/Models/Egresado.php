<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egresado extends Model
{
    protected $table = "egresado"; // hace referencia a la tabla cliente de la bd
    protected $primaryKey = "matricula";
    protected $filiable = [
        'ap_paterno', 'ap_materno', 'nombres', 'curp', 'genero',
        'telefono', 'lugar_origen', 'direccion_actual', 'cv_url', 'habilitado', 'primer_empleo_id', 'created_at', 'updated_at'
    ];
    public $timestamps = false;
    //use HasFactory;
}
