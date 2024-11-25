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
        Schema::table('comentarios', function (Blueprint $table) {
            $table->foreign(['id_ticket'], 'comentarios_ibfk_1')->references(['id_ticket'])->on('tickets')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_usuario'], 'comentarios_ibfk_2')->references(['IdUsuario'])->on('usuario')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_agente'], 'comentarios_ibfk_3')->references(['id_agente'])->on('agentes')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comentarios', function (Blueprint $table) {
            $table->dropForeign('comentarios_ibfk_1');
            $table->dropForeign('comentarios_ibfk_2');
            $table->dropForeign('comentarios_ibfk_3');
        });
    }
};
