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
        Schema::create('navbar_ones', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('fav_icon')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('about_us')->nullable();
            $table->string('fb')->nullable();
            $table->string('insta')->nullable();
            $table->string('tweeter')->nullable();
            $table->string('ldn')->nullable();
            $table->string('pintrest')->nullable();
            $table->string('yt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('navbar_ones');
    }
};
