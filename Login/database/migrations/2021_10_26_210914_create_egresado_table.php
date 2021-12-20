<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEgresadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Egresado', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('matricula', 10)->primary()->unique();
            $table->string('ap_paterno', 50);
            $table->string('ap_materno', 50);
            $table->string('nombres', 100);
            $table->string('grado_academico')->default('Bachiller');
            $table->string('dni', 8)->unique();
            $table->enum('genero', ['Masculino', 'Femenino']);
            $table->date('fecha_nacimiento');
            $table->string('semestre_ingreso', 10);
            $table->string('semestre_egreso', 10);
            $table->string('celular', 9);
            $table->string('pais_origen', 50);
            $table->string('departamento_origen', 200);
            $table->string('pais_residencia', 50);
            $table->string('cuidad_residencia', 50);
            $table->string('lugar_residencia', 100);
            $table->string('linkedin', 100)->nullable();
            $table->string('url')->nullable();
            $table->boolean('habilitado')->default('1');

            $table->integer('id_carrera')->unsigned()->nullable();
            $table->foreign('id_carrera')->references('id_carrera')->on('carrera')->unique();
            /* $table->integer('primer_empleo_id')->unsigned()->nullable();
            $table->foreign('primer_empleo_id')->references('id')->on('PrimerEmpleo')->unique(); */
            $table->integer('id_academico')->unsigned()->nullable();
            $table->foreign('id_academico')->references('id_academico')->on('academico')->unique();
           /*  $table->integer('id_profesion')->unsigned()->nullable();
            $table->foreign('id_profesion')->references('id_profesion')->on('profesion')->unique(); */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('Egresado');
        Schema::enableForeignKeyConstraints();
    }
}
