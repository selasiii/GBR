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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->on('drivers')->index();
            $table->foreignId('conductor_id')->on('conductors')->index();
            $table->foreignId('bus_id')->on('buses')->index();
            $table->foreignId('route_id')->on('routes')->index();

            $table->dateTime('departure_datetime');
            $table->integer('estimated_duration');

            $table->enum('status', ['pending', 'ongoing', 'completed', 'cancelled'])->default('pending');

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('bus_hirings', function (Blueprint $table) {
            $table->id();

            // Company information
            $table->string('company_name');
            $table->string('contact_name');
            $table->string('company_email')->unique();

            // Contact information
            $table->string('phone');
            $table->string('additional_phone')->nullable();

            // Trip details
            $table->string('start_location');
            $table->string('end_location');
            $table->dateTime('departure_date');

            // Bus requirements
            $table->integer('number_of_buses');
            $table->integer('bus_capacity');
            $table->integer('duration_in_days');

            // Additional information
            $table->text('purpose');

            // Status with validation
            $table->enum('status', ['approved', 'declined', 'pending'])->default('pending');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
        Schema::dropIfExists('bus_hirings');
    }
};
