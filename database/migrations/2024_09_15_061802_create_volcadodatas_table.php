<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolcadodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volcadodatas', function (Blueprint $table) {
            $table->id(); // ID principal (autoincremental)
            $table->unsignedBigInteger('id_check'); // Clave foránea para checkmail o checknumber
            $table->date('fecha'); // Fecha
            $table->text('data'); // Campo para almacenar información (puede ser JSON o texto largo)
            $table->unsignedBigInteger('empresa'); // Relación con la tabla usuarios (empresa)
            $table->string('info', 255); // Información adicional
            $table->timestamps();

            // Clave foránea con `checkmail`
            $table->foreign('id_check')->references('id_check')->on('checkmails')->onDelete('cascade');
            
            // Clave foránea con `checknumber`
            $table->foreign('id_check')->references('id_check')->on('checknumbers')->onDelete('cascade');
            
            // Clave foránea con la tabla `usuarios`
            $table->foreign('empresa')->references('id_empresa')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volcadodatas');
    }
}
