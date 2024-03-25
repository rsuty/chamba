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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained("users")->onDelete('cascade');
            $table->foreignId('worker_id')->constrained("users")->onDelete('cascade');
            $table->foreignId('request_chamba_id')->constrained("request_chambas")->onDelete('cascade');
            $table->integer('rating');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews_trable');
    }
};
