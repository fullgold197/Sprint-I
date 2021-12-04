<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academico', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_academico');
            $table->string('carr_profesional', 50);
            $table->string('grado_academico', 50);
            $table->string('pais', 50);
            $table->string('tipo_estudio', 50);
            $table->string('institución', 50);
            $table->date('fecha_inicial');
            $table->date('fecha_final');
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
        Schema::dropIfExists('Academico');
        Schema::enableForeignKeyConstraints();
    }
}
