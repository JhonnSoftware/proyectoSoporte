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
        Schema::create('usuario', function (Blueprint $table) {
            $table->integer('IdUsuario', true);
            $table->string('Usuario', 30);
            $table->string('Password', 30);
            $table->string('Email', 50);
            $table->boolean('Estado')->default(true);
            $table->string('Fotografia', 100)->nullable();
            $table->integer('IdPersona')->nullable()->index('idpersona');
            $table->integer('IdRol')->index('idrol');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
