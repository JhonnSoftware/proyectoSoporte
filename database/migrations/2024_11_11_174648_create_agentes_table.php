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
        Schema::create('agentes', function (Blueprint $table) {
            $table->integer('id_agente', true);
            $table->string('nombre', 100);
            $table->string('correo', 100)->unique('correo');
            $table->string('telefono', 20)->nullable();
            $table->date('fecha_contratacion')->nullable()->default('CURRENT_DATE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agentes');
    }
};
