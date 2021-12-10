<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUrlToEgresado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('egresado', function (Blueprint $table) {
            //
            $table->string('url')->nullable()->after('Distrito');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('egresado', function (Blueprint $table) {
            //
            $table->dropColumn('egresado');
        Schema::disableForeignKeyConstraints();
        Schema::enableForeignKeyConstraints();
        });
    }
}
