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
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->id();
            $table->float('quantity', 2);
            $table->float('unit_price', 2);
            $table->float('total_price', 2);

            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('supplies_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('supplies_id')->references('id')->on('supplies');
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_orders');
    }
};
