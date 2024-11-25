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
        Schema::create('orden', function (Blueprint $table) {
            $table->integer('IdOrden', true);
            $table->dateTime('FechaOrden');
            $table->dateTime('FechaRequerido');
            $table->string('EstadoOrden', 50);
            $table->integer('IdCliente')->index('idcliente');
            $table->boolean('TipoOrden');
            $table->string('CodigoOrden', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orden');
    }
};
