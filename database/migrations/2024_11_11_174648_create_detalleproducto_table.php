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
        Schema::create('detalleproducto', function (Blueprint $table) {
            $table->integer('IdDetalleProducto', true);
            $table->integer('IdProducto')->index('idproducto');
            $table->string('Color', 15)->nullable();
            $table->string('Categoria', 20)->nullable();
            $table->string('Talla', 5);
            $table->char('Material', 18)->nullable();
            $table->char('Descripcion', 18)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalleproducto');
    }
};
