<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('workers_permissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId("worker_id")->constrained(table: "workers");
            $table->foreignId("permission_id")->constrained(table: "permissions");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workers_permissions');
    }
};
