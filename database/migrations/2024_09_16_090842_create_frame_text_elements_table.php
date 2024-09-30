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
        Schema::create('frame_text_elements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('frame_id')->constrained()->onDelete('cascade');
            $table->string('uid')->nullable();
            $table->string('tite')->nullable();
            $table->string('default_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frame_text_elements');
    }
};
