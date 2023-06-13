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
        Schema::create('enderecos', function (Blueprint $table) {
            $table->string('CEP');
            $table->string('numero');

            $table->primary(['CEP', 'numero']);

            $table->string('rua');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->text('complemento');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enderecos');
    }
};
