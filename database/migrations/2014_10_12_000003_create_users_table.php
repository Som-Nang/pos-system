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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('profile_image');
            $table->string('current_address');
            $table->integer('age');
            $table->string('gender');
            $table->string('phone');
            $table->string('emergency_contact')->nullable();
            $table->string('id_card_number')->nullable();
            $table->string('password');
            $table->rememberToken();

            $table->unsignedBigInteger('branch_id');
            $table->unsignedBigInteger('role_id');

            $table->foreign('branch_id')->references('id')->on('branches');
            $table->foreign('role_id')->references('id')->on('user_role');
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
