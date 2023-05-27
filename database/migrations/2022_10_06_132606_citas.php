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
        Schema::create('citas', function (Blueprint $table){
            $table->id();
            $table->date('fecha');
            $table->time('hora');
            $table->string('motivo');
            $table->string('tipo_visa');
            $table->foreignId('id_usuario')->constrained('users');
            $table->string('nombre_clte');
            $table->string('status')->default('pendiente');
            $table->timestamps();
            $table->softDeletes();
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
