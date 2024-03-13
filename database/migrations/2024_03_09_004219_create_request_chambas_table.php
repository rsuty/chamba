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
        Schema::create('request_chambas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained("users")->onDelete('cascade');
            $table->foreignId('worker_id')->constrained("users")->onDelete('cascade');
            $table->foreignId('chamba_id')->constrained()->onDelete('cascade');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->date('end_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_chamba');
    }
};
