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
        Schema::create('tb_transporte', function (Blueprint $table) {
            $table->bigIncrements('id_transporte');
            $table->String('capacidad');
            $table->integer('peso');
            $table->integer('no_asiento')->unique();
            $table->unsignedBigInteger('fk_id_destino');
            $table->timestamps();

            $table->foreign('fk_id_destino')->references('id_destino')->on('tb_destino');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_transporte');
    }
};
