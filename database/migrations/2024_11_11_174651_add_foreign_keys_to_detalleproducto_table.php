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
        Schema::table('detalleproducto', function (Blueprint $table) {
            $table->foreign(['IdProducto'], 'detalleproducto_ibfk_1')->references(['IdProducto'])->on('producto')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detalleproducto', function (Blueprint $table) {
            $table->dropForeign('detalleproducto_ibfk_1');
        });
    }
};
