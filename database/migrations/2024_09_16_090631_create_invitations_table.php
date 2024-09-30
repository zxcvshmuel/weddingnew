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
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained()->onDelete('cascade')->nullable();
            $table->foreignId('frame_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('song_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('effect_id')->nullable()->constrained()->onDelete('set null');
            $table->string('title')->nullable();
            $table->text('message')->nullable();
            $table->json('details')->nullable();
            $table->date('event_date')->nullable();
            $table->string('location')->nullable();
            $table->string('unique_link')->unique()->nullable();
            $table->string('status')->default('draft'); // e.g., 'draft', 'pending', 'approved', 'paid'
            $table->json('design_data')->nullable(); // For additional design info
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
