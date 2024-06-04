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
        Schema::create('car_lists', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('make_model');
            $table->year('year');
            $table->string('type');
            $table->string('engine');
            $table->string('transmission');
            $table->string('mileage');
            $table->integer('seating_capacity');
            $table->string('color');
            $table->text('features')->nullable();
            $table->decimal('hourly_rate', 8, 2);
            $table->decimal('daily_rate', 8, 2);
            $table->decimal('weekly_rate', 8, 2);
            $table->decimal('monthly_rate', 8, 2);
            $table->decimal('security_deposit', 8, 2);
            $table->string('insurance')->default('Included');
            $table->string('fuel_policy')->default('Full to Full');
            $table->decimal('late_return_fee', 8, 2);
            $table->text('payment_methods')->nullable();
            $table->text('age_requirement')->nullable();
            $table->text('booking_confirmation')->nullable();
            $table->text('cancellation_policy')->nullable();
            $table->text('damage_policy')->nullable();
            $table->text('mileage_limit')->nullable();
            $table->text ('how_to_book')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_lists');
    }
};
