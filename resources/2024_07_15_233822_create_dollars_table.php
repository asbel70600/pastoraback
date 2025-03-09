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
        Schema::create('dollars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('day');
            $table->decimal('quantity', 12, 2);
            $table->decimal('price', 12, 2);
            $table->foreignId('center_id')->constrained(table: 'centers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dollars');
    }
};
