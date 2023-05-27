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
        Schema::create('documentos', function (Blueprint $table){
            $table->id();
            $table->string('solicitud');
            $table->string('foto');
            $table->string('comprobante_pago');
            $table->string('identificacion');
            $table->string('p_economica')->nullable();
            $table->string('p_edu_empleo')->nullable();
            $table->foreignId('id_usuario')->constrained('users');
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
        //
    }
};
