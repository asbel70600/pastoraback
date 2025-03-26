<?php

use App\Currencies;
use App\Mediums;
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

        Schema::create(
            'bill_stocks', function (Blueprint $table) {
                $posible_mediums = array_map(fn ($case) => $case->name, Mediums::cases());
                $posible_currencies  = array_map(fn ($case) => $case->name, Currencies::cases());

                $table->id();
                $table->timestamps();

                $table->foreignId('subsidiary_id')->constrained('subsidiaries');
                $table->enum('medium', $posible_mediums);
                $table->enum('currency', $posible_currencies);
                $table->float('quantity');
                $table->integer('denomination')->nullable();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill_stocks');
    }
};
