<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('familiar_historicos', function (Blueprint $table) {
            $table->string('num_registro')->primary();
            $table->foreign('num_registro')->references('num_registro')->on('pacientes')->onDelete('cascade')->onUpdate('cascade');

            $table->json('dm');
            $table->boolean('possui_dm1');
            $table->string('dm1')->nullable();
            $table->json('obesidade');
            $table->json('vitiligo');
            $table->json('doenca_tireoideana');
            $table->json('displidemia');
            $table->json('alopecia');
            $table->json('artrite_reumatoide');
            $table->json('doenca_coronariana');
            $table->json('has');
            $table->json('doenca_celiaca');
            $table->string('num_USP');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('familiar_historicos');
    }
};
