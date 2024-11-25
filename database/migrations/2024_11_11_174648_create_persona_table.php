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
        Schema::create('persona', function (Blueprint $table) {
            $table->integer('IdPersona', true);
            $table->string('Nombre', 50);
            $table->string('Apellido', 50);
            $table->string('TipoPersona', 50);
            $table->string('TipoDocumento', 50);
            $table->string('NumeroDocumento', 20);
            $table->string('Telefono', 15);
            $table->string('Direccion', 100)->nullable();
            $table->integer('Edad')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona');
    }
};
