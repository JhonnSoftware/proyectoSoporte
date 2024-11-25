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
        Schema::create('comprobantedetalle', function (Blueprint $table) {
            $table->integer('IdComprobante');
            $table->integer('IdMaterial')->index('idmaterial');
            $table->integer('Cantidad');
            $table->decimal('PrecioUnitario', 19, 4);
            $table->integer('IdUnidad')->index('idunidad');

            $table->primary(['IdComprobante', 'IdMaterial']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comprobantedetalle');
    }
};
