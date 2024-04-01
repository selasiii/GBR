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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();

            $table->dateTime('issued_at')->useCurrent();
            $table->dateTime('expires_at');
            $table->enum('status', ['valid', 'invalid'])->default('valid');

            // Relationships with optional cascade behavior
            $table->foreignId('user_id')->on('users');
            $table->foreignId('trip_id')->on('trips');
            $table->foreignId('payment_id')->on('payments');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
