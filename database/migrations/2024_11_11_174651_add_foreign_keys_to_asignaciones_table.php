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
        Schema::table('asignaciones', function (Blueprint $table) {
            $table->foreign(['id_ticket'], 'asignaciones_ibfk_1')->references(['id_ticket'])->on('tickets')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_agente'], 'asignaciones_ibfk_2')->references(['id_agente'])->on('agentes')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('asignaciones', function (Blueprint $table) {
            $table->dropForeign('asignaciones_ibfk_1');
            $table->dropForeign('asignaciones_ibfk_2');
        });
    }
};
