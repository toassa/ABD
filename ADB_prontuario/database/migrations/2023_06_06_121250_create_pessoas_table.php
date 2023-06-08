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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->string('num_USP')->primary();
            $table->string('nome');
            $table->string('CPF');
            $table->string('email_USP')->unique();
            $table->string('senha');
            $table->rememberToken();
            $table->enum('cargo', ['medico', 'aluno'])->default('aluno');
            $table->boolean('administrador');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
