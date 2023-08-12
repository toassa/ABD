<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('num_USP')->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('password_verify');
            $table->rememberToken();
            $table->string('CPF')->unique();
            $table->integer('mesa');          
            $table->enum('cargo', ['medico', 'membro fixo', 'coordenador'])->default('coordenador');
            $table->string('funcao');
            $table->boolean('administrador')->default(false);
            $table->boolean('ativo')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
