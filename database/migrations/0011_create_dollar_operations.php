<?php

use App\Mediums;
use App\Operations;
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
        Schema::create('dollar_operations', function (Blueprint $table) {

            $posible_operations = array_map(fn ($case) => $case->name, Operations::cases());
            $posible_mediums = array_map(fn ($case) => $case->name, Mediums::cases());

            $table->id();
            $table->timestamps();

            $table->foreignId('subsidiary_id')->constrained('subsidiaries');
            $table->foreignId('user_id')->constrained('users');
            $table->float('amount');
            $table->boolean('adjustment')->default(false);
            $table->string('description', 300)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dollar_operations');
    }
};
