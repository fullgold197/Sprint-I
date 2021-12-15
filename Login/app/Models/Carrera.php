<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    public $table = "carrera"; // hace referencia a la tabla cliente de la bd
    public $primaryKey = "id_carrera ";
    public $fillable = [
        'carrera ', 'created_at', 'updated_at'
    ];
    public $timestamps = false;
    //use HasFactory;
}
