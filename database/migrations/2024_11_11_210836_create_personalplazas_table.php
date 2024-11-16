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
        Schema::create('personalplazas', function (Blueprint $table) {
            $table->id();
            $table->smallInteger("tiponombramiento");
            $table->foreignId("plaza_id")->constrained();
            $table->foreignId("personal_id")->constrained();
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personalplazas');
    }
};
