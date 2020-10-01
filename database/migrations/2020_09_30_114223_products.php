<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('product_category', ['Electronics', 'Fashion', 'Food']);
            $table->string('name', 200);
            $table->text('description')->nullable();
            $table->string('unit_price', 120);
            $table->integer('inventory')->nullable()->unsigned();
            $table->integer('user_id');
            $table->enum('payment_options', ['Direct', 'Installments']);
            $table->string('delivery_options', 200);
            $table->string('discount_start_date', 200)->nullable();
            $table->string('discount_end_date', 200)->nullable();
            $table->integer('discount_percentage')->nullable()->unsigned();
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
}
