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
        Schema::create('attendant_detail', function (Blueprint $table) {
            $table->id();
            $table->string('att_stat')->default('Absent');
            $table->dateTimeTz('checkIn_time', $precision = 0)->nullable();

            $table->unsignedBigInteger('attendant_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('attendant_id')->references('id')->on('attendant');
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendant_detail');
    }
};
