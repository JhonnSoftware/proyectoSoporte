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
        Schema::create('erro', function (Blueprint $table) {
            $table->integer('IdError', true);
            $table->text('Url')->nullable();
            $table->text('Controller')->nullable();
            $table->text('Ip')->nullable();
            $table->text('Method')->nullable();
            $table->text('UserAgent')->nullable();
            $table->text('Host')->nullable();
            $table->text('ClassComponent')->nullable();
            $table->text('FunctionName')->nullable();
            $table->integer('LineNumber')->nullable();
            $table->text('Error1')->nullable();
            $table->text('StackTrace')->nullable();
            $table->text('Status')->nullable();
            $table->text('Request')->nullable();
            $table->integer('ErrorCode')->nullable();
            $table->dateTime('Fecha');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('erro');
    }
};
