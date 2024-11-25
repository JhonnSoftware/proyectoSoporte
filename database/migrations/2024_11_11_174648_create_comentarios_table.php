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
        Schema::create('comentarios', function (Blueprint $table) {
            $table->integer('id_comentario', true);
            $table->integer('id_ticket')->nullable()->index('id_ticket');
            $table->integer('id_usuario')->nullable()->index('id_usuario');
            $table->integer('id_agente')->nullable()->index('id_agente');
            $table->text('comentario');
            $table->timestamp('fecha_comentario')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
