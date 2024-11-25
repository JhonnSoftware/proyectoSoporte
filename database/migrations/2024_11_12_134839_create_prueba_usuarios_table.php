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
        Schema::create('prueba_usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('usuario', 30);
            $table->string('password', 255);
            $table->string('email', 50)->unique();
            $table->boolean('estado')->default(true);
            $table->integer('idRol')->index('idrol');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prueba_usuarios');
    }
};
