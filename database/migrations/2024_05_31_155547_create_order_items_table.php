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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id(); // Primary key, auto-increment
            $table->foreignId('order_id')->constrained('orders'); // Foreign key to orders table
            $table->foreignId('menu_id')->constrained('menu'); // Foreign key to menu table
            $table->integer('quantity'); // INT
            $table->decimal('price', 10, 2); // DECIMAL(10, 2)
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
