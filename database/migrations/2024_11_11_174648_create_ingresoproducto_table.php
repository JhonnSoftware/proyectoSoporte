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
        Schema::create('ingresoproducto', function (Blueprint $table) {
            $table->integer('IdIngresoProducto', true);
            $table->integer('IdProducto')->index('idproducto');
            $table->integer('Cantidad');
            $table->dateTime('FechaIngreso');
            $table->integer('IdUnidad')->index('idunidad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingresoproducto');
    }
};
