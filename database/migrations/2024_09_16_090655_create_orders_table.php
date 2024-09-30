<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained()->onDelete('cascade');
            $table->foreignId('invitation_id')->constrained()->onDelete('cascade');
            $table->decimal('amount', 8, 2);
            $table->string('status')->default('pending'); // e.g., 'pending', 'completed', 'canceled'
            $table->string('payment_method')->nullable();
            $table->string('transaction_id')->nullable();
            $table->json('order_data')->nullable(); // For additional order details
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
