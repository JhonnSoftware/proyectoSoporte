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
        Schema::table('ingresoproducto', function (Blueprint $table) {
            $table->foreign(['IdProducto'], 'ingresoproducto_ibfk_1')->references(['IdProducto'])->on('producto')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdUnidad'], 'ingresoproducto_ibfk_2')->references(['IdUnidad'])->on('unidad')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ingresoproducto', function (Blueprint $table) {
            $table->dropForeign('ingresoproducto_ibfk_1');
            $table->dropForeign('ingresoproducto_ibfk_2');
        });
    }
};
