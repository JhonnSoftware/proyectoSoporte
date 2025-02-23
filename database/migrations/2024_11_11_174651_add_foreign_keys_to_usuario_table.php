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
        Schema::table('usuario', function (Blueprint $table) {
            $table->foreign(['IdPersona'], 'usuario_ibfk_1')->references(['IdPersona'])->on('persona')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['IdRol'], 'usuario_ibfk_2')->references(['IdRol'])->on('rol')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('usuario', function (Blueprint $table) {
            $table->dropForeign('usuario_ibfk_1');
            $table->dropForeign('usuario_ibfk_2');
        });
    }
};
