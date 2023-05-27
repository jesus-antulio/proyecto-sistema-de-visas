<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas_x_usuarios', function (Blueprint $table){
            $table->id();
            $table->foreignId('id_cuestionario')->constrained('cuestionarios');
            $table->foreignId('id_usuario')->constrained('users');
            $table->timestamps();
            
            // $table->id();
            // $table->string('respuesta_1');
            // $table->string('respuesta_2');
            // $table->string('respuesta_3');
            // $table->string('respuesta_4');
            // $table->string('respuesta_5');
            // $table->foreignId('id_usuario')->constrained('usuarios');
            // $table->foreignId('id_cuestionario')->constrained('cuestionarios');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
