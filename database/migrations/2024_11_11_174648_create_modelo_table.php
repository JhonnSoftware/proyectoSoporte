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
        Schema::create('modelo', function (Blueprint $table) {
            $table->integer('IdModelo', true);
            $table->string('NombreModelo', 30)->nullable();
            $table->string('CodigoModelo', 10)->nullable();
            $table->string('DescripModelo', 100)->nullable();
            $table->string('ImageModelo', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modelo');
    }
};
