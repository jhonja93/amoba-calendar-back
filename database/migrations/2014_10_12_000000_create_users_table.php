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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('picture')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamp('last_online')->nullable();
            $table->string('verification_code')->nullable();
            $table->string('new_email')->nullable();
            $table->integer('status')->nullable();
            $table->integer('first')->nullable();
            $table->timestamp('last_accept_date')->nullable();
            $table->timestamp('created')->nullable();
            $table->timestamp('modified')->nullable();
            $table->string('company_contact')->nullable();
            $table->float('credits')->nullable();
            $table->boolean('first_trip')->nullable();
            $table->boolean('incomplete_profile')->nullable();
            $table->boolean('phone_verify')->nullable();
            $table->string('token_auto_login')->nullable();
            $table->string('user_vertical')->nullable();
            $table->bigInteger('language_id')->nullable();
            $table->boolean('no_registered')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
