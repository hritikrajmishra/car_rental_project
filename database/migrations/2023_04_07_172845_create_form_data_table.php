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
        Schema::create('form_data', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->nullable();
            $table->string('Tour')->nullable();
            $table->string('Email')->nullable();
            $table->string('Mobile')->nullable();
            $table->string('Country')->nullable();
            $table->string('Pickup')->nullable();
            $table->string('drop')->nullable();
            $table->string('Pickuplocation')->nullable();
            $table->string('Remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_data');
    }
};
