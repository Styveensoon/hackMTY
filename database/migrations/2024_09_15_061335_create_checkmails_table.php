<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkmails', function (Blueprint $table) {
            $table->id('id_check'); // ID principal
            $table->string('correo', 150)->unique(); // Correo único
            $table->unsignedBigInteger('empresa'); // Relación con la tabla usuarios
            $table->foreign('empresa')->references('id_empresa')->on('usuarios')->onDelete('cascade'); // Llave foránea a la tabla usuarios
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
        Schema::dropIfExists('checkmails');
    }
}
