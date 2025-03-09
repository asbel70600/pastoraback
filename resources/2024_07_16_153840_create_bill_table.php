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
        Schema::create('bill', function (Blueprint $table) {
            $table->id();
            $table->integer('1');
            $table->integer('5');
            $table->integer('10');
            $table->integer('20');
            $table->integer('50');
            $table->integer('100');
            $table->integer('200');
            $table->integer('500');
            $table->integer('1000');
            $table->decimal('card', 12, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill');
    }
};
