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
        Schema::create('register_users', function (Blueprint $table) {
            $table->id();
            $table->uuid("uuid")->unique();
            $table->string('full_name');
            $table->string('email');
            $table->longText('address');
            $table->string('phone_no');
            $table->string('username');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_users');
    }
};
