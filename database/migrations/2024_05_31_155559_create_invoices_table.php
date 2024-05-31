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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id(); // Primary key, auto-increment
            $table->foreignId('order_id')->constrained('orders'); // Foreign key to orders table
            $table->string('pdf_path', 255); // VARCHAR(255)
            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP')); // DATETIME, default CURRENT_TIMESTAMP
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
