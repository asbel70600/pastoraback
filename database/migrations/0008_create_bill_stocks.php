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

        Schema::create('bill_stocks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('subsidiary_id')->constrained('subsidiaries');
            $table->integer('dennomination');
            $table->float('quantity');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill_stocks');
    }
};
