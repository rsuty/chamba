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
        Schema::create('chamba', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->longText('description');
            $table->float('rating')->default(0.0);
            $table->enum('job', ['Albanil', 'Plomero', 'Carpintero']);
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chamba');
    }
};
