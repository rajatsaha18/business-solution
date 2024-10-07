<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuySellProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_sell_product_details', function (Blueprint $table) {
            $table->id();
            $table->integer('buysell_product_id')->nullable();
            $table->string('beds')->nullable();
            $table->string('baths')->nullable();
            $table->string('size')->nullable();
            $table->string('features')->nullable();
            $table->string('facing')->nullable();
            $table->string('completion_status')->nullable();
            $table->string('property_type')->nullable();
            $table->string('land_size')->nullable();
            $table->string('unit_one')->nullable();
            $table->string('unit_two')->nullable();
            $table->string('house_size')->nullable();
            $table->string('land_type')->nullable();
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
        Schema::dropIfExists('buy_sell_product_details');
    }
}
