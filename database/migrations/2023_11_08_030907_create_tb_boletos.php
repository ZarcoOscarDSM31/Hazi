<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_boletos', function (Blueprint $table) {
            $table->bigIncrements('id_boletos');
            $table->integer('precio');
            $table->date('fecha_compra');
            $table->date('fecha_salida');
            $table->unsignedBigInteger('fk_id_cliente');
            $table->unsignedBigInteger('fk_id_destino');
            $table->timestamps();

            $table->foreign('fk_id_cliente')->references('id_cliente')->on('tb_cliente');
            $table->foreign('fk_id_destino')->references('id_destino')->on('tb_destino');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_boletos');
    }
};
