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
        Schema::create('buses', function (Blueprint $table) {
            $table->id();
            $table->string('reg_number')->unique();
            $table->unsignedInteger('capacity');
            $table->string('model');
            $table->string('make');
            $table->year('year')->nullable();
            $table->string('color')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->enum('condition', ['working', 'faulty', 'damaged'])->default('working');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buses');
    }
};
