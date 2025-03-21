<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('subsidiaries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('location')->unique();
            $table->string('picture')->unique();
            $table->string('schedule');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('subsidiaries');
    }
};
