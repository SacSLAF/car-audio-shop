<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('service_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('email')->nullable();
            $table->string('phone')->required();
            $table->string('vehicle_type'); // Toyota, Daihatsu, Micro, Suzuki, etc.
            $table->string('vehicle_model')->nullable(); // Raize, Premio, Wagon R, etc.
            $table->string('vehicle_year')->nullable();
            $table->json('services')->nullable(); // Array of selected services
            $table->text('additional_notes')->nullable();
            $table->string('preferred_date')->nullable();
            $table->string('preferred_time')->nullable();
            $table->string('status')->default('pending'); // pending, contacted, confirmed, completed, cancelled
            $table->text('admin_notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_bookings');
    }
};