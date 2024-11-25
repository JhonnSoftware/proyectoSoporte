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
        Schema::create('detalleorden', function (Blueprint $table) {
            $table->integer('IdDetalleOrden', true);
            $table->decimal('PrecioUnitario', 19, 4);
            $table->integer('Cantidad');
            $table->integer('IdOrden')->index('idorden');
            $table->integer('IdProducto')->index('idproducto');
            $table->integer('IdUnidad')->index('idunidad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalleorden');
    }
};
