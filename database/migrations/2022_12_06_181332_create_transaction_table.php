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
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('store_id');
            $table->unsignedBigInteger('product_id');
            $table->double('price');
            $table->timestamp('transaction_time');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
};
