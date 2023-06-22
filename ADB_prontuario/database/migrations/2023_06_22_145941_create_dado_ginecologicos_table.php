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
        // Schema::create('dado_ginecologicos', function (Blueprint $table) {
        //     $table->string('num_USP')->primary();
        //     $table->foreign('num_USP')->references('num_USP')->on('pessoas')->onDelete('cascade')->onUpdate('cascade');

        //     $table->

        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dado_ginecologicos');
    }
};
