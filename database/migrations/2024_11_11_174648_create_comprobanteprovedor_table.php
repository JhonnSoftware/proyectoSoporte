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
        Schema::create('comprobanteprovedor', function (Blueprint $table) {
            $table->integer('IdComprobante', true);
            $table->dateTime('FechaEntrega');
            $table->dateTime('FechaPedido');
            $table->decimal('CosteTransporte', 19, 4);
            $table->string('TipoComprobante', 20);
            $table->string('CodigoComprobante', 20);
            $table->integer('IdProvedor');
            $table->decimal('MontoTotal', 19, 4)->nullable();
            $table->integer('CantidadTotal')->nullable();
            $table->decimal('SubTotal', 19, 4)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comprobanteprovedor');
    }
};
