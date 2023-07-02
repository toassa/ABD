<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('insulinas', function (Blueprint $table) {
            $table->string('num_registro')->primary();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('insulinas');
    }
};
