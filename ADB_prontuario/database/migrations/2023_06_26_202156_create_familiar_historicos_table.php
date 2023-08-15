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

            $table->string('dm');
            $table->boolean('possui_dm1');
            $table->string('dm1')->nullable();
            $table->string('obesidade');
            $table->string('vitiligo');
            $table->string('doenca_tireoideana');
            $table->string('displidemia');
            $table->string('alopecia');
            $table->string('artrite_reumatoide');
            $table->string('doenca_coronariana');
            $table->string('has');
            $table->string('doenca_celiaca');
            $table->string('num_USP');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('familiar_historicos');
    }
};
