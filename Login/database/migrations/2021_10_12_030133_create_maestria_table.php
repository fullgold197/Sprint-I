<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaestriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestria', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_maestria');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('Maestria');
        Schema::enableForeignKeyConstraints();
    }
}
