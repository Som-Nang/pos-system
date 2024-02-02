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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_code');
            $table->string('product_name');
            $table->float('unit_in_stock', 2);
            $table->float('unit_price', 2);
            $table->float('discount', 2);
            $table->integer('reorder_level');

            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger("unit_id");
            $table->unsignedBigInteger("user_id");

            $table->foreign('category_id')->references('id')->on('product_categories');
            $table->foreign('unit_id')->references('id')->on('unit_product');
            $table->foreign('user_id')->references('id')->on('users');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
