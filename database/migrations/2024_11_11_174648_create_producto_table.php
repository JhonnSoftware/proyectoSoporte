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
        Schema::create('producto', function (Blueprint $table) {
            $table->integer('IdProducto', true);
            $table->string('NombreProd', 40);
            $table->string('CodigoProd', 20);
            $table->decimal('PrecioUnitario', 19, 4);
            $table->integer('Stock');
            $table->boolean('EstadoProducto');
            $table->integer('IdUnidad')->index('idunidad');
            $table->string('Fotografia', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
