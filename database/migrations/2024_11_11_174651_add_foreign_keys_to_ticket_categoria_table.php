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
        Schema::table('ticket_categoria', function (Blueprint $table) {
            $table->foreign(['id_ticket'], 'ticket_categoria_ibfk_1')->references(['id_ticket'])->on('tickets')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_categoria'], 'ticket_categoria_ibfk_2')->references(['id_categoria'])->on('categorias')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ticket_categoria', function (Blueprint $table) {
            $table->dropForeign('ticket_categoria_ibfk_1');
            $table->dropForeign('ticket_categoria_ibfk_2');
        });
    }
};
