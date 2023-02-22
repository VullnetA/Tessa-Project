<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('title', 30)->nullable();
            $table->mediumText('description')->nullable();
            $table->string('image')->nullable();
            $table->string('category', 20)->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('price')->nullable();
            $table->integer('Stylistprice')->nullable();
            $table->integer('discount_price')->nullable();
            $table->string('brand', 20)->nullable();
            $table->string('Offer')->nullable();
            $table->string('HairType')->nullable();
            $table->boolean('PopularProducts')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
