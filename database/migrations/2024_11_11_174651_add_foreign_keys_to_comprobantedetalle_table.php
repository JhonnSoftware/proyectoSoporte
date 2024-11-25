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
        Schema::table('comprobantedetalle', function (Blueprint $table) {
            $table->foreign(['IdComprobante'], 'comprobantedetalle_ibfk_1')->references(['IdComprobante'])->on('comprobanteprovedor')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdMaterial'], 'comprobantedetalle_ibfk_2')->references(['IdProducto'])->on('producto')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdUnidad'], 'comprobantedetalle_ibfk_3')->references(['IdUnidad'])->on('unidad')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comprobantedetalle', function (Blueprint $table) {
            $table->dropForeign('comprobantedetalle_ibfk_1');
            $table->dropForeign('comprobantedetalle_ibfk_2');
            $table->dropForeign('comprobantedetalle_ibfk_3');
        });
    }
};
