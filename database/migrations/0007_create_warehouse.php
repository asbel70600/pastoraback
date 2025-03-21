<?php

use App\Operations;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {

        Schema::create('wharehouse', function (Blueprint $table) {
            $posible_operations = array_map(fn ($case) => $case->name, Operations::cases());

            $table->id();
            $table->timestamps();
            $table->foreignId('subsidiary_id')->constrained('subsidiaries');
            $table->foreignId('product_id')->constrained('products');
            $table->foreignId('user_id')->constrained('users');
            $table->float('amount');
            $table->enum('type', $posible_operations);
            $table->boolean('adjustment')->default(false);
            $table->string('description', 300)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_operations');
    }
};
