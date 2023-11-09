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
        Schema::create('tb_direccion', function (Blueprint $table) {
            $table->bigIncrements('id_direccion'); //Es un id autoincementable
            $table->String('calle')->unique();
            $table->integer('no_interior')->nullable();
            $table->integer('no_exterior')->unique();
            $table->integer('cop')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_direccion');
    }
};
