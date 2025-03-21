<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('picture');
            $table->string('name');
            $table->float('weight');
            $table->string('measure_unit');

            $table->decimal('buy_price', total: 12, places: 2);
            $table->decimal('sale_price', total: 12, places: 2);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
