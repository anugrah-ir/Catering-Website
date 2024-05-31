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
        Schema::create('menu', function (Blueprint $table) {
            $table->id(); // Primary key, auto-increment
            $table->string('name', 100); // VARCHAR(100)
            $table->text('description')->nullable(); // TEXT, nullable
            $table->decimal('price', 10, 2); // DECIMAL(10, 2)
            $table->boolean('available')->default(true); // BOOLEAN, default TRUE
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};
