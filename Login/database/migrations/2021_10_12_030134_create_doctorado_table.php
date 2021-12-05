<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctoradoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctorado', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_doctorado');
            $table->string('grado_academico', 50);
            $table->string('pais', 50);
            $table->string('institución', 50);
            $table->date('fecha_inicial');
            $table->date('fecha_final');
            $table->integer('id_academico')->unsigned()->nullable();
            $table->foreign('id_academico')->references('id_academico')->on('academico')->unique();
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
        Schema::dropIfExists('doctorado');
    }
}
