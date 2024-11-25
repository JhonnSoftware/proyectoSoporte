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
        Schema::table('detalleorden', function (Blueprint $table) {
            $table->foreign(['IdOrden'], 'detalleorden_ibfk_1')->references(['IdOrden'])->on('orden')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdProducto'], 'detalleorden_ibfk_2')->references(['IdProducto'])->on('producto')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdUnidad'], 'detalleorden_ibfk_3')->references(['IdUnidad'])->on('unidad')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detalleorden', function (Blueprint $table) {
            $table->dropForeign('detalleorden_ibfk_1');
            $table->dropForeign('detalleorden_ibfk_2');
            $table->dropForeign('detalleorden_ibfk_3');
        });
    }
};
