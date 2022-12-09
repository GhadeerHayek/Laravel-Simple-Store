<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Store;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->double('price');
            $table->string('image_url')->nullable();
            $table->boolean('is_discount')->default(0);
            $table->double('price_after_discount')->default(0);
            $table->unsignedBigInteger('store_id');
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);

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
