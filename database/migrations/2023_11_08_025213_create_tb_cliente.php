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
        Schema::create('tb_cliente', function (Blueprint $table) {
            $table->bigIncrements('id_cliente');
            $table->String('nombre');
            $table->String('app');
            $table->String('apm')->nullable();
            $table->String('sexo');
            $table->unsignedBigInteger('fk_id_direccion');
            $table->timestamps();

            $table->foreign('fk_id_direccion')->references('id_direccion')->on('tb_direccion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_cliente');
    }
};
